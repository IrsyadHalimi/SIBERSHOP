<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriModel extends CI_Model
{
    public function tampilkan_kategori()
    {
        $result = $this->db->get('kategori_layanan');
        return $result;
    }

    public function simpan_kategori($data = null)
    {
        $this->db->insert('kategori_layanan', $data);
    }

    function hapus_kategori($data)
    {
        $this->db->where('id_kategori', $data);
        $this->db->delete('kategori_layanan');
    }
}