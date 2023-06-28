<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get_all_admin()
    {
        return $this->db->get('data_admin')->result();
    }
    
    //murid
    public function get_all_murid()
    {
        return $this->db->get('data_murid')->result();
    }

  
    public function delete_admin($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('data_admin');
    }

    public function insert_murid($data)

    {
        $this->db->insert('data_murid',$data);
    }

    public function get_murid($id_murid)
    {
        $this->db->where('id_murid', $id_murid);
        return $this->db->get('data_murid')->row();
    }

    public function hapus_murid($id_murid)
    {
        $this->db->where('id_murid', $id_murid);
        $this->db->delete('data_murid');
    }

    public function update_murid($id_murid, $data)
    {
        $this->db->where('id_murid',$id_murid);
        $this->db->update('data_murid', $data);
    }



/*
    public function get_pencarian($pencarian){
        $this->db->select('*');
        $this->db->from('data_murid');
        $this->db->like('nama_murid', $pencarian);
        $this->db->or_like('kelas', $pencarian);
        return $this->db->get()->result();
    }
    */
    //end murid

    //guru
     public function get_all_guru()
    {
        return $this->db->get('data_guru')->result();
    }
       public function insert_guru($data)

    {
        $this->db->insert('data_guru',$data);
    }
     public function get_guru($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        return $this->db->get('data_guru')->row();
    }

     public function hapus_guru($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('data_guru');
    }
    public function update_guru($id_guru, $data)
    {
        $this->db->where('id_guru',$id_guru);
        $this->db->update('data_guru', $data);
    }

    public function inqlastid()
    {   
       $query = $this->db->query('SELECT LAST_INSERT_ID() as lastid');
        
       $res = $query->row();
       return $res;

    }

    /*
    public function detail_dataguru($id_guru){


         return $this->db->get('data_guru')->result();
    }
    */
    

    //berita
      public function get_all_berita()
    {

        return $this->db->get('data_berita')->result();
    }
    public function insert_berita($data)

    {
        $this->db->insert('data_berita',$data);
    }

    public function hapus_berita($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->delete('data_berita');
    }
    public function update_berita($id_berita, $data)
    {
        $this->db->where('id_berita',$id_berita);
        $this->db->update('data_berita', $data);
    }
    public function get_berita($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        return $this->db->get('data_berita')->row();
    }

    // Hafalan
      public function get_all_hafalan()
    {
        $this->db->select('*,setor_hafalan.keterangan AS ket_hafalan');
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

    //search murid

    public function cariDataMurid()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_murid',$keyword);
        $this->db->or_like('kelas',$keyword);
        return $this->db->get('data_murid')->result();
    }

    //search guru
    public function cariDataGuru()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_guru',$keyword);
        $this->db->or_like('nik_guru',$keyword);
        return $this->db->get('data_guru')->result();
    }

     //search berita
    public function cariDataBerita()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('tanggal',$keyword);
        $this->db->or_like('judul',$keyword);
        return $this->db->get('data_berita')->result();
    }

    //search hafalan

    /*
    public function cariDataHafalan()
    {
        $keyword=$this->input->post('keyword',true);
        $this->db->like('nama_murid',$keyword);
        $this->db->or_like('tanggal',$keyword);
        return $this->db->get('setor_hafalan')->result();
    }
    */

}

?>