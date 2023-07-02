<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{
  

    
  //guru
     public function get_all_guru()
    {
        return $this->db->get('data_guru')->result();
    }
     public function get_guru($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        return $this->db->get('data_guru')->row();
    }
    public function update_guru($id_guru, $data)
    {
        $this->db->where('id_guru',$id_guru);
        $this->db->update('data_guru', $data);
    }
    public function data_guru()
    {
        $this->db->select('*');
        $this->db->from('data_guru');

        return $this->db->get()->num_rows();
    }

  // End Guru

  //murid
     public function get_all_murid()
    {
        return $this->db->get('data_murid')->result();
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

        $this->db->select('*, data_guru.keterangan AS ket_guru, setor_hafalan.keterangan AS ket_hafalan');
        $this->db->from('setor_hafalan');
        $this->db->join('data_guru', 'data_guru.id_guru = setor_hafalan.id_guru');
        $this->db->join('data_murid', 'data_murid.id_murid = setor_hafalan.id_murid');
        return $this->db->get()->result();

    }
     public function insert_hafalan($data)

    {
        $this->db->insert('setor_hafalan',$data);
    }

    public function get_hafalan($id_setorhafalan)
    {
        $this->db->where('id_setorhafalan', $id_setorhafalan);
        return $this->db->get('setor_hafalan')->row();
    }

    public function hapus_hafalan($id_setorhafalan)
    {
        $this->db->where('id_setorhafalan', $id_setorhafalan);
        $this->db->delete('setor_hafalan');
    }
    public function update_hafalan($id_setorhafalan, $data)
    {
        $this->db->where('id_setorhafalan',$id_setorhafalan);
        $this->db->update('setor_hafalan', $data);
    }

       public function setor_hafalan()
    {
        $this->db->select('*');
        $this->db->from('setor_hafalan');

        return $this->db->get()->num_rows();
    }

    //search guru
    public function cariDataGuru()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_guru',$keyword);
        $this->db->or_like('nik_guru',$keyword);
        return $this->db->get('data_guru')->result();
    }

      public function cariDataMurid()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_murid',$keyword);
        $this->db->or_like('kelas',$keyword);
        return $this->db->get('data_murid')->result();
    }

      public function cariDataHafalan()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_murid',$keyword);
        $this->db->or_like('tanggal',$keyword);
        return $this->db->get('setor_hafalan')->result();
    }


    
}

?>