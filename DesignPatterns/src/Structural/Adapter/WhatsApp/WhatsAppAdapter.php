<?php
namespace App\Structural\Adapter;

use App\Structural\Adapter\Share;

//Adapter
class WhatsAppAdapter implements Share{

    private $whatsapp;
    private $data;
    
    public function __construct(WhatsAppShare $whatsapp, String $data) {
        $this->whatsapp = $whatsapp;
        $this->data = $data;
    }

    public function shareData(){
        $this->whatsapp->waShare($this->data);
    }
}