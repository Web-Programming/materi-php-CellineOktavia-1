<?php
namespace App\Produk;
class Item {
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    function info(){
        return "Ini produk: " .$this->nama;
    }
}
?>