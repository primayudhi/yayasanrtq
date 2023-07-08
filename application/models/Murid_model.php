<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Murid_model extends CI_Model
{
  

  //murid
    public function get_all_murid()
    {
        $this->db->select('*');
        $this->db->from('data_murid');
        $this->db->join('data_kelas', 'data_kelas.id_kelas = data_murid.id_kelas');
        return $this->db->get()->result();
    }

      public function data_murid()
    {
        $this->db->select('*');
        $this->db->from('data_murid');

        return $this->db->get()->num_rows();
    }
  // End Murid 
  
  // Hafalan
      public function get_all_hafalan()
    {
        $this->db->select('*, setor_hafalan.keterangan AS ket_hafalan');
        $this->db->from('setor_hafalan');
        $this->db->join('data_guru', 'data_guru.id_guru = setor_hafalan.id_guru');
        $this->db->join('data_murid', 'data_murid.id_murid = setor_hafalan.id_murid');
        $this->db->join('data_kelas', 'data_kelas.id_kelas = setor_hafalan.id_kelas');

        return $this->db->get()->result();
    }
     public function insert_hafalan($data)

    {
        $this->db->insert('data_hafalan',$data);
    }

    public function get_hafalan($id_setorhafalan)
    {
        $this->db->where('id_setorhafalan', $id_setorhafalan);
        return $this->db->get('setor_hafalan')->row();
    }

      public function setor_hafalan()
    {
        $this->db->select('*');
        $this->db->from('setor_hafalan');

        return $this->db->get()->num_rows();
    }

    //search murid

    public function cariDataMurid()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_murid',$keyword);
        $this->db->or_like('kelas',$keyword);
        return $this->db->get('data_murid')->result();
    }

    
}

?>