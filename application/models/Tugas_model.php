<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas_model extends CI_Model
{
    public function getTugas()
    {
        $query = "SELECT db_tugas.* FROM db_tugas";
        return $this->db->query($query)->result_array();
    }

    public function deleteTugas($id_tugas)
    {
        // Logika penghapusan berdasarkan $id_materi
        $this->db->where('id_tugas', $id_tugas);
        $this->db->delete('db_tugas');
    }

    public function getMahasiswa()
    {
        $query = "SELECT db_mahasiswa.* FROM db_mahasiswa";
        return $this->db->query($query)->result_array();
    }
    public function getListMahasiswa()
    {
        $query = "SELECT db_mahasiswa.* FROM db_mahasiswa";
        return $this->db->query($query)->result_array();
    }
}