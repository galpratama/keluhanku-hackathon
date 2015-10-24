<?php
class Dashboard extends MX_Controller{
    
    
    function index(){
        $this->template->load('template','dashboard');
    }

}