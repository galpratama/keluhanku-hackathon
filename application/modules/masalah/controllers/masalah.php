<?php
class Masalah extends MX_Controller{
    
    function __construct() {
        parent::__construct();
        //is_login();
    }
    
    function index(){
        $data['list'] = $this->db->get('tbl_permasalahan');
        $this->template->load('template','list',$data);
    }
    
    function add(){
        if(isset($_POST['submit']))
        {
            $config['upload_path'] = './assets/cover/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000000000000000000000000000';
            $config['max_width']  = '1024000000000000000';
            $config['max_height']  = '76000800000000000000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $foto  = $this->upload->data(); 
            print_r($foto);
            die;
            $data = array(
                'nama_masalah'  => $this->input->post('nama'),
                'start_date'    => $this->input->post('mulai'),
                'end_date'      => $this->input->post('selesai'),
                'status'        => $this->input->post('status'),
                'hastag'        => $this->input->post('hastag'),
                'deskripsi'     => $this->input->post('deskripsi'),
                'cover_image'   => $foto['file_name']);
            
            print_r($data);
            die;
            $this->db->insert('tbl_permasalahan',$data);
            redirect('group');
        }else
        {
            $data['kategori']   = $this->db->get('tbl_kategori_masalah');
            $this->template->load('template','add',$data);
        }
    }
    
    function edit(){
        if(isset($_POST['submit']))
        {
            $this->db->where('',  $this->input->post('id'));
            $this->db->update('pbk_groups',array('Name'=>  $this->input->post('group')));
            redirect('group');
        }else
        {
            $id                 = $this->uri->segment(3);
            $data['kategori']   = $this->db->get('tbl_kategori_masalah');
            $data['record']     = $this->db->get_where('tbl_permasalahan',array('masalah_id'=>$id))->row_array();
            $this->template->load('template','edit',$data);
        }
    }
    
    function delete(){
        $id     = $this->uri->segment(3);
        $this->db->where('ID',$id);
        $this->db->delete('pbk_groups');
        redirect('group');
    }
}