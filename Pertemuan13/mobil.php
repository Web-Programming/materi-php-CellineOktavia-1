<?php
//Cara Penulisan class mobil
class Mobil{
    //Cara Penulisan Property
    public $warna;
    public $merk;

    //Cara Penulisan Method
    function maju(){
        //Isi Method maju()
        return "Mobil maju";
    }

    function berhenti(){
        //Isi Method berhenti()
        return "Mobil berhenti";
    }
}
//Instansiasi Object
$mobil_ahmad = new Mobil();
$mobil_anton = new Mobil();

//Set Property
$mobil_ahmad->warna = "Hitam";
$mobil_ahmad->merk= "Toyota";

//Tampilkan property
echo "Mobil Ahmad";
echo "<br>Warna : " .$mobil_ahmad->warna;
echo "<br>Merk : " .$mobil_ahmad->merk;

//Tampilkan Method
echo "<br>";
echo $mobil_ahmad->maju();
echo "<br>";
echo $mobil_ahmad->berhenti();
?>