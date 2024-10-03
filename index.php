<?php


class Mobil
{

    //Property 
    public $merek;
    public $model;
    public $tahun;
    public $warna;

    //Metode
    public function start()
    {
        echo 'Mobil dinyalakan';
    }

    public function cek($nama, $ket)
    {
        echo 'Merek : ' . $this->merek . '<br> ';
        echo 'Model : ' . $this->model . '<br> ';
        echo 'Tahun : ' . $this->tahun . '<br> ';
        echo 'Warna : ' . $this->warna . '<br> ';
        echo 'Pemilik : ' . $nama . '<br>';
        echo 'Keterangan  : ' . $ket . '<br>';
    }

    public function stop()
    {
        echo 'Mobil dimatikan';
    }
}

//Opject

$mobil = new Mobil();
$mobil->merek = 'Avansa';
$mobil->model = 'Inova';
$mobil->tahun = '2023';
$mobil->warna = 'putih';

//panggil Metode 
$ket = '
Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Maksud penggunaan lipsum adalah agar pengamat tidak terlalu berkonsentrasi kepada arti harfiah per kalimat, melainkan lebih kepada elemen desain dari teks yang dipresentasi. ';


// Panggil Metode

$mobil->cek('korius', $ket);

// $mobil->stop();