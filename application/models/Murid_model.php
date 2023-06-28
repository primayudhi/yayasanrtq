<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Murid_model extends CI_Model
{
  

  //murid
     public function get_all_murid()
    {
        return $this->db->get('data_murid')->result();
    }

  // End Murid 
  
  // Hafalan
      public function get_all_hafalan()
    {
        $this->db->select('*, setor_hafalan.keterangan AS ket_hafalan');
        $this->db->from('setor_hafalan');
        $this->db->join('data_guru', 'data_guru.id_guru = setor_hafalan.id_guru');
        $this->db->join('data_murid', 'data_murid.id_murid = setor_hafalan.id_murid');
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