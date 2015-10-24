<?php
class Group extends MX_Controller{
    
    function __construct() {
        parent::__construct();
        is_login();
    }
    
    function index(){
        $data['list'] = $this->db->get('pbk_groups');
        $this->template->load('template','list',$data);
    }
    
    function add(){
        if(isset($_POST['submit']))
        {
            $this->db->insert('pbk_groups',array('Name'=>  $this->input->post('group')));
            redirect('group');
        }else
        {
            $this->template->load('template','add');
        }
    }
    
    function edit(){
        if(isset($_POST['submit']))
        {
            $this->db->where('ID',  $this->input->post('id'));
            $this->db->update('pbk_groups',array('Name'=>  $this->input->post('group')));
            redirect('group');
        }else
        {
            $id             = $this->uri->segment(3);
            $data['record'] = $this->db->get_where('pbk_groups',array('ID'=>$id))->row_array();
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