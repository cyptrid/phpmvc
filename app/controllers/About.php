<?php 

class About{
    public function index($nama = "joban", $pekerjaan = "it")
    {
        echo "Halo, Nama saya $nama, saya adalah seorang $pekerjaan "; 
    }
    public function page(){
        echo "About/page";
    }
}