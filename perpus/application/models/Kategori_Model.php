<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Model extends CI_Model
{
	public function index()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('kategori.deleted_at is null', null);
		$this->db->order_by('kategori.id_kategori');
		return $this->db->get();
	}

	public function create($data)
	{
		if($this->db->insert('kategori', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function edit($id)
    {
	    $this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('kategori.id_kategori', $id);
		
		return $this->db->get();
	}

	public function update($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_kategori', $id);
		if($this->db->update('kategori'))
		{
			return true;
		}else
		{
			return false;
		}
	}

	public function delete($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_kategori', $id);
		if($this->db->update('kategori'))
		{
			return true;
		}else
		{
			return false;
		}
	}
}