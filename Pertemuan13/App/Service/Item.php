<?php
namespace App\Service;
class Item {
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }

    function info(){
        return "Ini Service: " .$this->nama;
    }
}
?>
