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
            $this->db->insert('pbk_groups',array('Name'=>  $this->input->post('group')));
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