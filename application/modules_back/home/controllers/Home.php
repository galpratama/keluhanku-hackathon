<?php

class Home extends MX_Controller {

    function index() {
        $data['masalah'] = $this->db->get(' tbl_permasalahan')->result();
        $this->template->load('frontend', 'home', $data);
    }
    
    function detail(){
        $id              = $this->uri->segment(3);
        $data['inbox']   = $this->db->query("select * from inbox limit 10");
        $data['masalah'] = $this->db->get_where(' tbl_permasalahan',array('masalah_id'=>$id))->row_array();
        $this->template->load('frontend', 'detail', $data);
    }
    
    function daftar()
    {
        if(isset($_POST['submit'])){
            $config['upload_path'] = './assets/volounter/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '76800';
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $foto = $this->upload->data();
            $data = array(
                'email'         => $this->input->post('email'),
                'password'      => md5($this->input->post('password')),
                'nama_lengkap'  => $this->input->post('nama_lengkap'),
                'no_hp'         => $this->input->post('no_hp'),
                'no_ktp'        => $this->input->post('no_ktp'),
                'foto'          => $foto['file_name'],
                'jenis'         => $this->input->post('jenis'),
                'biografi'      => $this->input->post('biografi'),
                'alamat'        => $this->input->post('alamat'));
            $this->db->insert('tabel_volunteer',$data);
            $volunteer = $this->db->get_where('tabel_volunteer',array('volunteer_id'=>$this->db->insert_id()))->row_array();
            $this->session->set_userdata($volunteer);
            $this->session->set_userdata(array('login'=>'oke'));
            redirect(base_url());
        }else{
            $this->template->load('frontend', 'register');
        }
    }
    
    
    function submit_issue(){
        if(isset($_POST['submit'])){
            $data = array(
                'judul'     =>  $this->input->post('judul'),
                'deskripsi' =>  $this->input->post('deskripsi'),
                'lokasi'    =>  $this->input->post('lokasi'),
                'periority' =>  $this->input->post('optradio')
            );
            $this->db->insert('tbl_pengajuan_masalah',$data);
            $this->session->set_flashdata('pesan',"<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Berhasil !</strong> issue masalah sudah di submit untuk ditindak lanjuti.
</div>");
            redirect('home/submit_issue');
        }else{
            $this->template->load('frontend', 'submit-issue');
        }
    }

}