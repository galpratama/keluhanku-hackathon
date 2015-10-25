<?php
class Inbox extends MX_Controller{
    
    function __construct() {
        parent::__construct();
        is_login();
    }
    
    function index(){
        $this->db->order_by('ReceivingDateTime','DESC');
        $data['inbox'] = $this->db->get('inbox');
        $this->template->load('template','list',$data);
    }
    
    function read(){
        $id = $this->uri->segment(3);
        $data['instansi']    = $this->db->get('tabel_instansi');
        $data['inbox_detail'] = $this->db->get_where('inbox',array('ID'=>$id))->row_array();
        $this->template->load('template','read',$data);
    }
    
    function delete($id){
        $this->db->where('ID',$id);
        $this->db->delete('inbox');
        redirect('inbox');
    }
    
    function reply(){
        $param = array(
            'DestinationNumber'=>  $this->input->post('hp'),
            'TextDecoded'=>$this->input->post('pesan'));
        $this->db->insert('outbox',$param);
        $this->sms($this->input->post('pesan'), $this->input->post('instansi'));
        redirect('inbox');
    }
    
    
    
    function sms($message,$telepon){
        $userkey="tux7de";
        //$telepon = "089699935552";
        $passkey="hello"; // set passkey di zenziva
        //$message="Terima Kasih, pendaftaran atas nuris akbar telah berhasil di websiteAnda.com. Silahkan baca dan download petunjuk selanjutnya. Harap Maklum";
        $url = "https://reguler.zenziva.net/apps/smsapi.php";
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS,
                        'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        $results = curl_exec($curlHandle);
        curl_close($curlHandle);
    }
}