<?php
class Dosen extends CI_Controller{
    public function index(){
        // method Dosen 1
        $this->load->model('dosen_model', 'dsn1');

        $this->dsn1->id="1";
        $this->dsn1->nidn="	0414047101";
        $this->dsn1->nama="Sirojul Munir, S.Si, M.Kom.";
        $this->dsn1->gender="L";
        $this->dsn1->pendidikan='Magister komputer';

        // method Dosen 2
        $this->load->model('dosen_model', 'dsn2');

        $this->dsn2->id="2";
        $this->dsn2->nidn="0413128601";
        $this->dsn2->nama="Ahmad Rio Adriansyah, S.Si. M.Si.";
        $this->dsn2->gender="L";
        $this->dsn2->pendidikan='Magister komputer';

        // method Dosen 3
        $this->load->model('dosen_model', 'dsn3');

        $this->dsn3->id="3";
        $this->dsn3->nidn="420089004";
        $this->dsn3->nama="TIFANI NABARIAN, S.Kom, M.T.i";
        $this->dsn3->gender="P";
        $this->dsn3->pendidikan='Sarjana komputer';


        // simpan objek yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('dosen/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('dosen/footer');
    }
}