<?php
class volunteer extends MX_Controller{
    
    function __construct() {
        parent::__construct();
        //is_login();
    }
    
    function index(){
        $data['volunteer'] = $this->db->get('tabel_volunteer');
        $this->template->load('template','list',$data);
    }
    
    
    function testing()
    {
        echo sms('085861790446', 'Anda mendapatkan akses Internet tanpa pulsa ke www.internet.org Layanan tersedia dlm versi Android.unduh aplikasi internet.org di Google Play Store.S&K berlakuAnda mendapatkan akses Internet tanpa pulsa ke www.internet.org Layanan tersedia dlm versi Android.unduh aplikasi internet.org di Google Play Store.S&K berlakuAnda mendapatkan akses Internet tanpa pulsa ke www.internet.org Layanan tersedia dlm versi Android.unduh aplikasi internet.org di Google Play Store.S&K berlakuAnda mendapatkan akses Internet tanpa pulsa ke www.internet.org Layanan tersedia dlm versi Android.unduh aplikasi internet.org di Google Play Store.S&K berlakuAnda mendapatkan akses Internet tanpa pulsa ke www.internet.org Layanan tersedia dlm versi Android.unduh aplikasi internet.org di Google Play Store.S&K berlaku');
    }
    
    function read(){
        $data['outbox'] = $this->db->get_where('sentitems',array('ID'=>  $this->uri->segment(3)))->row_array();
        $this->template->load('template','read',$data);
    }
    
    function write(){
        $data['group']  =  $this->db->get('pbk_groups')->result();
        $this->template->load('template','write',$data);
    }
    
    function grouplist()
    {
        $id = $this->input->get('id');
        $data = $this->db->get_where('pbk',array('groupID'=>$id));
        echo "<table class='table table-bordered'>
                  <tr><th>No</th><th>No HP</th><th></th></tr>";
        $no=1;
        foreach ($data->result() as $d)
        {
            echo "<tr><td>$no</td><td>$d->Name</td><td><i class='fa fa-sign-out' title='add' onClick='add($d->ID)'></i></td></tr>";
            $no++;
        }
                  
        echo"</table>";
        
    }
    
    function addtemp(){
        $id = $this->input->get('id');
        $this->db->insert('pbk_temp',array('pbkID'=>$id));      
    }
    
    function getTujuan()
    {
        $sql = "SELECT p.ID,p.Name
                FROM pbk_temp as t,pbk as p 
                WHERE p.ID=t.pbkID";
        $data = $this->db->query($sql);
        echo "<table class='table table-bordered'>
                  <tr><th>No</th><th>No HP</th><th></th></tr>";
        $no=1;
        foreach ($data->result() as $d)
        {
            echo "<tr><td>$no</td><td>$d->Name</td><td><i class='fa fa-sign-out' title='add' onClick='add($d->ID)'></i></td></tr>";
            $no++;
        }
                  
        echo"</table>";
    }
    
    
    function sms()
    {
        $pesan = $this->input->post('pesan');
        // lakukan looping
         $sql = "SELECT t.id,p.Number
                FROM pbk_temp as t,pbk as p 
                WHERE p.ID=t.pbkID";
         $temp = $this->db->query($sql);
         foreach ($temp->result() as $t)
         {
             // send sms
             sms($t->Number, $pesan);
             // delete record
             $this->db->where('id',$t->id);
             $this->db->delete('pbk_temp ');
         }
         redirect('outbox/write');
    }
    
    function shortsms()
    {
        $params = array(
            'SendingDateTime'=>date('Y-m-d H:i:s'),
            'DestinationNumber'=>'085861790446',
            'TextDecoded'=>'test kirim sms'
        );
        $this->db->insert('outbox',$params);
        
    }
    
    
    function longsms(){
        $pesan      = "IM3 Pinternet.Langsung GRATIS Internetan 30MB+30Menit+30SMS/30hari jg Ribuan Menit&Ribuan SMS.GRATIS Langsung SuperWiFi 30hr,ktk:SUPERWIFI IM3 ke363Kamu ada di IM3 Pinternet.Langsung GRATIS Internetan 30MB+30Menit+30SMS/30hari jg Ribuan Menit&Ribuan SMS.GRATIS Langsung SuperWiFi 30hr,ktk:SUPERWIFI IM3 ke363";
        // hitung jumlah sms
        $jmlSMS     = ceil(strlen($pesan)/153);
        // pecah sms
        $pecah      = str_split($pesan,153);
        // baca id terakhir dari tabel outbox
        $sql        = $this->db->query("show table status like 'outbox'")->row_array();
        $newID      = $sql['Auto_increment'];
        // random bilangan 1 sampai 225
        $random     = rand(1,255);
        // ubah random ke hedaximal 2 digit
        $headerUDH  = sprintf("%02s",  strtoupper(dechex($random)));
        // proses insert tiap part sms 
        for($i=1;$i<=$jmlSMS;$i++)
        {
            // kontruksi UDH untuk setiap part
            $udh    =   "050003".$headerUDH.sprintf("%02s",$jmlSMS).sprintf("%02s",$i);
            $msg    =   $pecah[$i-1];
            // jika part 1 maka sisipkan ke tabel outbox
            if($i==1)
            {
                $sms = array(
                    'DestinationNumber' =>'085861790446',
                    'UDH'=>$udh,
                    'SendingDateTime'=>date('Y-m-d H:i:s'),
                    'TextDecoded'=>$msg,
                    'ID'=>$newID,
                    'Multipart'=>'true');
                $this->db->insert('outbox',$sms);
            }else{
                // selain itu ke tabel outbx multipart
                 $sms = array(
                    'UDH'=>$udh,
                    'TextDecoded'=>$msg,
                    'ID'=>$newID,
                    'SequencePosition'=>$i);
                $this->db->insert('outbox_multipart',$sms);
            }
        }
        
        
    }
    
    function delete(){
        $id = $this->uri->segment(3);
        $this->db->where('ID',$id);
        $this->db->delete('sentitems');
        redirect('outbox');
    }
    
    function autoreply(){
        $page  = base_url().'outbox/autoreply';
        $secod = 10;
        header("Refresh: $secod; url=$page");
        
        $inboxs = $this->db->get_where('inbox',array('Processed'=>'false'));
        foreach ($inboxs->result() as $inbox)
        {
            $pesan = $inbox->TextDecoded;
            $nohp  = $inbox->SenderNumber;
            $pecah = explode("#", $pesan);
            $keyword = $pecah[0];
            if(strtoupper($keyword)=='REG')
            {
                $nama = $pecah[1];
                // kirim sms berhasil mendaftar
                sms($nohp, "selamat $nama anda sudah berhasil terdaftar");
            }else{
                // gagal mendaftar
                sms($nohp, 'keyword yang anda masukan salah');
            }
            // ubah status Processed menjadi true
            $this->db->where('ID',$inbox->ID);
            $this->db->update('inbox',array('Processed'=>'true'));
        }
    }
    
    
    function readdata(){
        $server = "http://sms.belajarphp.net/outbox/xml";
        //$server = "http://localhost/client/api.php?action=GET";
        //$server   = "http://www.w3schools.com/xml/note.xml";
        $data   = simplexml_load_file($server);
        foreach ($data as $mydata)
        {


            echo $mydata->from;
            //$pesan = "Hai ".$mydata->nama_lengkap. ", password anda adalah ".$mydata->password;
            // send password by sms
            //sms($mydata->no_hp, $mydata->pesan);
            // proses update
            //simplexml_load_file($server."?action=UPDATE&nohp=".$mydata->no_hp);
            //echo "SMS sedang dikirim ke no ".$mydata->no_hp.'<br>';
        }
    }
}