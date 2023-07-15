<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    //admin
    public function get_all_admin()
    {
        return $this->db->get('data_admin')->result();
    }
     public function insert_admin($data)

    {
        $this->db->insert('data_admin',$data);
    }
     public function get_admin($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('data_admin')->row();
    }
    public function hapus_admin($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('data_admin');
    }
    public function update_admin($id_user, $data)
    {
        $this->db->where('id_user',$id_user);
        $this->db->update('data_admin', $data);
    }
     public function data_admin()
    {
        $this->db->select('*');
        $this->db->from('data_admin');

        return $this->db->get()->num_rows();
    }
   
    
    //murid
     public function get_all_murid()
    {
        $this->db->select('*');
        $this->db->from('data_murid');
        $this->db->join('data_kelas', 'data_kelas.id_kelas = data_murid.id_kelas');
        return $this->db->get()->result();
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

     public function data_murid()
    {
        $this->db->select('*');
        $this->db->from('data_murid');

        return $this->db->get()->num_rows();
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

//     public function updatefotoguru($data,$id_guru)
// {
//     $this->db->where('id_guru', $id_guru);       
//     $this->db->update('data_guru', $data);
// }

    //  public function updatefoto($id_guru, $data)
    // {
    //     $this->db->where('id_guru',$id_guru);
    //     $this->db->update('data_guru', $data);
    // }

    // public function inqlastid()
    // {   
    //    $query = $this->db->query('SELECT LAST_INSERT_ID() as lastid');
        
    //    $res = $query->row();
    //    return $res;

    // }

    /*
    public function detail_dataguru($id_guru){


         return $this->db->get('data_guru')->result();
    }
    */

    public function data_guru()
    {
        $this->db->select('*');
        $this->db->from('data_guru');

        return $this->db->get()->num_rows();
    }
    

    //berita
      public function get_all_berita()
    {
        $this->db->order_by("tanggal", "desc");
        return $this->db->get('data_berita')->result();
    }

    public function get_all_berita_limit()
    {
        $this->db->order_by("tanggal", "desc");
        $this->db->limit(3);
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

      public function data_berita()
    {
        $this->db->select('*');
        $this->db->from('data_berita');

        return $this->db->get()->num_rows();
    }

    public function get_berita_slug($slug)
    {
      $this->db->where('slug', $slug);
      return $this->db->get('data_berita')->row(); 
    }

    // Hafalan
  
       public function get_all_hafalan()
    {
        $this->db->select('*,setor_hafalan.keterangan AS ket_hafalan');
        $this->db->from('setor_hafalan');
        $this->db->join('data_guru', 'data_guru.id_guru = setor_hafalan.id_guru');
        $this->db->join('data_murid', 'data_murid.id_murid = setor_hafalan.id_murid');
        $this->db->join('data_kelas', 'data_kelas.id_kelas = setor_hafalan.id_kelas');

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
    public function inqlastid()
    {   
       $query = $this->db->query('SELECT LAST_INSERT_ID() as lastid');
        
       $res = $query->row();
       return $res;

    }

    public function get_all_surah()
    {
        $this->db->select('*');
        $this->db->from('data_surah');
        return $this->db->get()->result();
    }

    public function get_surah($id_surah)
    {
        $this->db->select('*');
        $this->db->from('data_surah');
        $this->db->where('id_surah', $id_surah);
        return $this->db->get()->row();
    }

    public function get_ayat($id_ayat)
    {
        $this->db->select('*');
        $this->db->from('data_ayat');
        $this->db->where('id_ayat', $id_ayat);
        return $this->db->get()->row();
    }

    public function get_ayat_by_surah($id_surah)
    {
        $this->db->select('*');
        $this->db->from('data_ayat');
        $this->db->join('data_surah', 'data_surah.id_surah = data_ayat.id_surah');
        $this->db->where('data_ayat.id_surah', $id_surah);
        return $this->db->get()->result();
    }
     public function get_ayat_by_hafalan($id_setorhafalan)
    {
        $this->db->select('*');
        $this->db->from('data_hafalanayat');
        $this->db->join('data_ayat', 'data_ayat.id_ayat = data_hafalanayat.id_ayat');
        $this->db->join('data_surah', 'data_surah.id_surah = data_ayat.id_surah');
        $this->db->where('data_hafalanayat.id_setorhafalan', $id_setorhafalan);
        return $this->db->get()->result();
    }

    public function get_ayat_by_surah_murid($id_surah, $id_murid)
    {
        $query = $this->db->query("SELECT *,
                IF(data_ayat.id_ayat IN 
                (SELECT data_hafalanayat.id_ayat FROM data_hafalanayat, setor_hafalan WHERE 
                    data_hafalanayat.id_setorhafalan = setor_hafalan.id_setorhafalan AND setor_hafalan.id_murid = $id_murid), 'Y', 'T') as hafal 
                FROM data_ayat
                JOIN data_surah ON data_surah.id_surah = data_ayat.id_surah
                where data_ayat.id_surah = $id_surah");
        
       $res = $query->result();
       return $res;
    }

    public function surah_by_murid($id_murid, $id_surah)
    {   
       $query = $this->db->query('SELECT *,
                (SELECT COUNT(id_ayat) FROM data_ayat WHERE s.id_surah = data_ayat.id_surah
                AND data_ayat.id_ayat IN (SELECT data_hafalanayat.id_ayat FROM data_hafalanayat, setor_hafalan WHERE 
                data_hafalanayat.id_setorhafalan = setor_hafalan.id_setorhafalan
                AND setor_hafalan.id_murid = '.$id_murid.')) as jlh_sdh,
                ROUND((SELECT 100 * jlh_sdh / jumlah_ayat),0) as persen
                FROM data_surah s where s.id_surah = '.$id_surah.'');
        
       $res = $query->row();
       return $res;

    }

    public function hapus_hafalan_ayat($id_murid, $id_ayat)
    {
        $this->db->where('id_murid', $id_murid);
        $this->db->where('id_ayat', $id_ayat);
        $this->db->delete('data_hafalanayat');
    }

    public function insert_hafalan_ayat($data)
    {
        $this->db->insert('data_hafalanayat',$data);
    }

    //end hafalan

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

    //Kelas
    public function get_all_kelas()
    {
        return $this->db->get('data_kelas')->result();
    }

     public function insert_kelas($data)

    {
        $this->db->insert('data_kelas',$data);
    }
     public function get_kelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->get('data_kelas')->row();
    }
    public function hapus_kelas($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('data_kelas');
    }
    public function update_kelas($id_kelas, $data)
    {
        $this->db->where('id_kelas',$id_kelas);
        $this->db->update('data_kelas', $data);
    }
    public function data_kelas()
    {
        $this->db->select('*');
        $this->db->from('data_kelas');

        return $this->db->get()->num_rows();
    }

}



?>