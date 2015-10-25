<?php
use Abraham\TwitterOAuth\TwitterOAuth;
class Home extends MX_Controller {

    
    
    function index() {
        $data['masalah'] = $this->db->get(' tbl_permasalahan')->result();
        $this->template->load('frontend', 'home', $data);
    }

    function detail() {
        $id = $this->uri->segment(3);
        $data['inbox'] = $this->db->query("select * from inbox limit 10");
        $data['masalah'] = $this->db->get_where(' tbl_permasalahan', array('masalah_id' => $id))->row_array();
        $this->template->load('frontend', 'detail', $data);
    }
    
    
    function login(){
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        $chek = $this->db->get_where('tabel_volunteer',array('email'=>$email,'password'=>md5($password)));
        if($chek->num_rows() >0)
        {
            $this->session->set_userdata($chek->row_array());
            echo "dsds";
            //redirect('home/submit_issue');
        }else{
           // redirect(base_url());
        }
    }

    function daftar() {
        if (isset($_POST['submit'])) {
            $config['upload_path'] = './assets/volounter/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width'] = '10240';
            $config['max_height'] = '76800';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $foto = $this->upload->data();
            $data = array(
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'no_hp' => $this->input->post('no_hp'),
                'no_ktp' => $this->input->post('no_ktp'),
                'foto' => $foto['file_name'],
                'jenis' => $this->input->post('jenis'),
                'biografi' => $this->input->post('biografi'),
                'alamat' => $this->input->post('alamat'));
            $this->db->insert('tabel_volunteer', $data);
            $volunteer = $this->db->get_where('tabel_volunteer', array('volunteer_id' => $this->db->insert_id()))->row_array();
            $this->session->set_userdata($volunteer);
            $this->session->set_userdata(array('login' => 'oke'));
            redirect(base_url());
        } else {
            $this->template->load('frontend', 'register');
        }
    }

    function submit_issue() {
       if($this->session->userdata('status_login')=='')
       {
           redirect(base_url());
       }
        if (isset($_POST['submit'])) {
            $data = array(
                'judul_masalah' => $this->input->post('judul'),
                'deskripsi_masalah' => $this->input->post('deskripsi'),
                'lokasi' => $this->input->post('lokasi'),
                'volunteer_id' => $this->session->userdata('volunteer_id'),
                'periority' => $this->input->post('optradio')
            );
            $this->db->insert('tbl_pengajuan_masalah', $data);
            $this->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Berhasil !</strong> issue masalah sudah di submit untuk ditindak lanjuti.
</div>");
            redirect('home/submit_issue');
        } else {
            $this->template->load('frontend', 'submit-issue');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    
    function search(){
        $masalah = $this->input->post['keyword'];
        $data['masalah'] = $this->db->query("select * from tbl_permasalahan where nama_masalah like '%$masalah%' ")->result();
        $this->template->load('frontend', 'search',$data);
    }
    
    
    
    function tweeter(){
                set_time_limit(0);
        $connection = new TwitterOAuth('geFW6FqBH8ChLqeTOVxEEwsXS', 'dKukW6t61qdTXPmfMa3op49sZbSZxHCr7JCuYdQxvgfnCvEiIO', '2953919196-EJy1jzYq2NrTwV26Ioj0yP2EBiZMHomkkhB49IG', 'HWh40k9wRv5YoTzf6bwrPqsmF1xZcHnP1DzGja4ZdsLvC');
        $content = $connection->get("account/verify_credentials");
        $statuses = $connection->get("search/tweets", array("q" => "#HackathonMDK",'count'=>2));
        //print_r($statuses);
        //print_r($statuses->response->docs);
        //var_dump($statuses);
        echo "<pre>";
        print_r($statuses);
        echo "</pre>";
    }

}