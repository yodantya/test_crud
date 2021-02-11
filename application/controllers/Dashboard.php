<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
    $this->load->model('M_laporan'); //load model yang dipanggil dalam controllers ini
    }
    

    public function index(){
        $data['title']      = 'Data Dashboard';
        $this->load->view('v_dashboard', $data);
    }

   public function count(){
        $penduduk   = $this->M_laporan->countpenduduk();
        $pria   = $this->M_laporan->countpria();
        $wanita   = $this->M_laporan->countwanita();
        $login   = $this->M_laporan->countlogin();
        echo json_encode(array(
            'penduduk'    => $penduduk->jml,
            'wanita'    => $wanita->jml,
            'pria'      => $pria->jml,
            'login'    => $login->jml
            )
        );
    }
}
