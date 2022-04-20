<?php
class Mahasiswa_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama, $nim, $gender, $tmp_hahir, $tgl_lahir, $ipk;

    public function predikat(){
        // contoh pengguunaan ternary operator
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }

}
