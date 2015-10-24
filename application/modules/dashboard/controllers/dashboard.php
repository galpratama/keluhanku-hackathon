<?php

class Dashboard extends MX_Controller {

    function index() {
        $this->load->library('googlemaps');
        $config['center'] = '-2.973819, 104.773136';
        $config['zoom'] = 15;
        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = '-2.976937, 104.775509';
        $this->googlemaps->add_marker($marker);
        
        $marker = array();
        $marker['position'] = '-2.974373, 104.774367';
        $this->googlemaps->add_marker($marker);
        
                $marker = array();
        $marker['position'] = '-2.972933, 104.772856';
        $this->googlemaps->add_marker($marker);
        
        $data['map'] = $this->googlemaps->create_map();
        $this->template->load('template', 'dashboard', $data);
    }

}