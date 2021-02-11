<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampillaporan extends CI_Controller {

    function __construct(){
	parent::__construct(); 
    $this->load->model(array('DbHelper', 'M_laporan'));

    $this->load->helper('tombol');
     }


    public function index()
	{
		$this->load->view('v_tampillaporan');
	}

    public function getlist(){
        $result         = $this->M_laporan->tampilstatuss();
        $list           = array();
        $no             = 1;
        foreach ($result as $r) {
        $row        = array(
                            "no"         => $no,
                            "id"         => $r->id,
                            "nik"        => $r->nik,
                            "nama"       => $r->nama,
                            "jnskelamin" => $r->jenis_kelamin,
                            "alamat"     => $r->alamat,
                            "tglinput"   => $r->tanggalinput,
                            "userinput"  => $r->userinput,
                            "tglupdate"  => $r->tanggalupdate,
                            "userupdate" => $r->userupdate,
                            "action"    => tombol($r->id)                            
            );

            $list[] = $row;
            $no++;
        }
        $ouput = array("data" => $list);
        echo json_encode($ouput);
    }

    public function ajax_add(){
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now         = date('Y-m-d H:i:s');

        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $gender  = $this->input->post('jeniskelamin');
        $alamat  = $this->input->post('alamat');
        $username = $this->session->userdata("nama_user");

 
        $data = array(
            "nik"        => $nik,
            "nama"       => $nama,
            "jenis_kelamin" => $gender,
            "alamat"     => $alamat,
            "tanggalinput"   => $now,
            "userinput"  =>  $username
            
        );

        $this->M_laporan->inputdata($data,'penduduk');
        echo json_encode(array("status" => TRUE));    
         
    }

     public function ajax_delete($id)
    {
        $this->M_laporan->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->M_laporan->edit($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now         = date('Y-m-d H:i:s');

        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $gender  = $this->input->post('jeniskelamin');
        $alamat  = $this->input->post('alamat');
        $username = $this->session->userdata("nama_user");


 
        $data = array(
            "nik"        => $nik,
            "nama"       => $nama,
            "jenis_kelamin" => $gender,
            "alamat"     => $alamat,
            "tanggalupdate"   => $now,
            "userupdate"  => $username
            
        );

        $where = array(
            'id' => $this->input->post('id')
            );

        $insert = $this->M_laporan->update($where,$data);
        echo json_encode(array("status" => TRUE));
    }

}