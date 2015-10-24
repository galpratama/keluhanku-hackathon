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
        redirect('inbox');
    }
}