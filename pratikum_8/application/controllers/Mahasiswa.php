<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
// METHOD MAHASISWA
    public function index(){
        $this->load->model('mahasiswa_model', 'mhs1');

        // buat objek model 1 dan nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim="0110221107";
        $this->mhs1->nama='Daffa Bagus Radityo';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model', 'mhs2');

        // buat objek model 2 dan nilainya
        $this->mhs2->id=2;
        $this->mhs2->nim="020001";
        $this->mhs2->nama='Pandan Wangi';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        // simpan objek yang kita buat tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('mahasiswa/footer');

    }
}