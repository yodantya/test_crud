<?php
class M_laporan extends CI_Model{

    public function tampilstatuss()
    {
        $this->db->select('*');
        $this->db->from('penduduk');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result(); 
    }

    function inputdata($data,$table){
        $this->db->insert($table,$data);
    }


    public function delete_by_id($kode)
    {
        $this->db->where('id', $kode);
        $this->db->delete('penduduk');
    }


    public function edit($id)
    {
     $query = $this->db->query("SELECT *
                        FROM penduduk
                                where penduduk.id='$id'");
       return $query->row(); 
    }

     public function update($where, $data)
    {
        $this->db->update('penduduk', $data, $where);
    }

    //model for dashboard
    function countpenduduk(){

        $query = $this->db->query("SELECT count(id) jml from penduduk ");
        return $query->row();
    }

    function countpria(){

        $query = $this->db->query("SELECT count(id) jml from penduduk where jenis_kelamin = 'P'");
        return $query->row();
    }

    function countwanita(){

        $query = $this->db->query("SELECT count(id) jml from penduduk where jenis_kelamin = 'W' ");
        return $query->row();
    }

     function countlogin(){

        $query = $this->db->query("SELECT count(username) jml from login");
        return $query->row();
    }


}
?>