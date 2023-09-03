<?php

class Contoh1 extends CI_Controller{
    public function index()
    {
        echo "<h1>Bio Data</h1>";
        echo"Nama: Akmal Sidik <br>
        Tempat dan Tanggal Lahir: Tasikmalaya, 18-09-2003 <br>
        Alamat: Jln. Ciwaas Depok 1 Kec.Tamansari <br>
        Pendidikan Terakhir: SMA <br>
        Pekerjaan: Pelajar <br>
        Hobi: Traveling <br>
        Deskripsi Singkat: <br>
        
        Saya sekarang sedang kuliah di univ BSI Tasikmalaya <br>dan baru menjakani Smester 3 di kelas yang berbeda";
    }
    public function penjumlahan($n1, $n2){
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
        $this->load->view('v-latihan', $data);

    }
}
