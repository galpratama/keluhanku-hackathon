<?php
class Auth extends MX_Controller{
    
    
    function index(){
        if(isset($_POST['submit']))
        {
            $data = array(
                'email'     => $this->input->post('email'),
                'password'  => md5($this->input->post('password')),
                'active'    =>  '1');
            $users = $this->db->get_where('users',$data);
            if($users->num_rows()>0)
            {
                $users= $users->row_array();
                $nama = $users['nama_lengkap'];
                $this->session->set_userdata(array('login_status'=>'oke','nama_lengkap'=>$nama));
                redirect('dashboard');
            }else{
                redirect('auth');
            }
        }else{
                    $this->load->view('auth/login');
        }
    }
    
    function signup(){
        if(isset($_POST['submit']))
        {
            $this->load->helper('string');
            $token = random_string('alnum', 4);
            $account = array(
                'nama_lengkap'      => $this->input->post('nama_lengkap'),
                'email'             => $this->input->post('email'),
                'password'          => md5($this->input->post('password')),
                'no_hp'             => $this->input->post('no_hp'),
                'token'             => $token
            );
            $this->db->insert('users',$account);
            // send sms token
            $pesan = "Token anda adalah ".$token;
            sms($this->input->post('no_hp'), $pesan);
            redirect('auth/verivy');
        }else{
            $this->load->view('auth/signup');
        }
    }
    
    function verivy(){
        if(isset($_POST['submit'])){
            $token = $this->input->post('token');
            $account = $this->db->get_where('users',array('token'=>$token));
            if($account->num_rows()>0)
            {
                $akun = $account->row_array();
                $this->db->where('users_id',$akun['users_id']);
                $this->db->update('users',array('active'=>'1'));
                redirect('inbox');
            }else{
                redirect('auth/verivy');
            }
        }else{
            $this->load->view('verivy');
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}