<?php
class Phonebook extends MX_Controller{
    
    function __construct() {
        parent::__construct();
        is_login();
    }
    
    function index(){
        $data['list'] = $this->db->get('pbk');
        $this->template->load('template','list',$data);
    }
    
    function add(){
        if(isset($_POST['submit']))
        {
            $phonebook = array(
                'Name'      => $this->input->post('name'),
                'Number'    => $this->input->post('number'),
                'GroupID'   => $this->input->post('group')
            );
            $this->db->insert('pbk',$phonebook);
            redirect('phonebook');
        }else{
            $data['group'] = $this->db->get('pbk_groups')->result();
            $this->template->load('template','add',$data);
        }
    }
    
    function edit(){
        if(isset($_POST['submit']))
        {
            $phonebook = array(
                'Name'      => $this->input->post('name'),
                'Number'    => $this->input->post('number'),
                'GroupID'   => $this->input->post('group')
            );
            $this->db->where('ID',  $this->input->post('id'));
            $this->db->update('pbk',$phonebook);
            redirect('phonebook');
        }else{
            $id             = $this->uri->segment(3);
            $data['record'] = $this->db->get_where('pbk',array('ID'=>$id))->row_array(); 
            $data['group']  = $this->db->get('pbk_groups')->result();
            $this->template->load('template','edit',$data);
        }
    }
    
    function delete(){
        $id     = $this->uri->segment(3);
        $this->db->where('ID',$id);
        $this->db->delete('pbk');
        redirect('phonebook');
    }
}