<?php
// server
class Api extends MX_Controller{
    
    function outbox(){
        header("Content-Type:text/xml");
        echo "<?xml version='1.0'?>";
        echo "<data>";
        $outbox = $this->db->get('outbox');
        foreach ($outbox->result() as $o)
        {
            echo "<sms>";
            echo "<no_tujuan>$o->DestinationNumber</no_tujuan>";
            echo "<pesan>$o->TextDecoded</pesan>";
            echo "<waktu>$o->SendingDateTime</waktu>";
            echo "<ID>$o->ID</ID>";
            echo"</sms>";
        }
        echo "</data>";
    }
    
    function hapusoutbox(){
        $ID = $this->uri->segment(3);
        header("Content-Type:text/xml");
        echo "<?xml version='1.0'?>";
        echo "<data>";
        $this->db->where('ID',$ID);
        $this->db->delete('outbox');
        echo "</data>";
    }
    
    function get_inbox(){
        $data   = array (
                "ReceivingDateTime" => $this->input->post('ReceivingDateTime'),
                "SenderNumber" => $this->input->post('SenderNumber'),
                "TextDecoded" => $this->input->post('TextDecoded')
            );
            $this->db->insert('inbox',$data);
    }
    
    function get_sentitems(){
        
            $data   = array (
                "SendingDateTime"   => $this->input->post('SendingDateTime'),
                "DestinationNumber" => $this->input->post('DestinationNumber'),
                "TextDecoded"       => $this->input->post('TextDecoded'),
                "Status"            => $this->input->post('Status'),
                "ID"                => $this->input->post('ID'),
            );
            $this->db->insert('sentitems',$data);
            
            
    }
    
}