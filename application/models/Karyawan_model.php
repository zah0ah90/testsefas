<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
	// var $table = 'tbl_karyawan'; //nama tabel dari database
	var $column_order = array(null, 'a.nama_karyawan', 'b.nama', 'c.nama'); //field yang ada di table user
	var $column_search = array('a.nama_karyawan', 'b.nama', 'c.nama'); //field yang diizin untuk pencarian 
	var $order = array('a.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$this->db->select('a.nama_karyawan, a.id, a.tanggal_lahir, b.nama as nama_jabatan, c.nama as kota_asal');
		$this->db->from('tbl_karyawan as a');
		$this->db->join('tbl_jabatan as b', 'b.id=a.jabatan_id');
		$this->db->join('tbl_kota as c', 'c.id=a.kota_asal_id');

		$i = 0;

		foreach ($this->column_search as $item) // looping awal
		{
			if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
			{

				if ($i === 0) // looping awal
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->select('a.nama_karyawan, a.id, a.tanggal_lahir, b.nama as nama_jabatan, c.nama as asal_kota');
		$this->db->from('tbl_karyawan as a');
		$this->db->join('tbl_jabatan as b', 'b.id=a.jabatan_id');
		$this->db->join('tbl_kota as c', 'c.id=a.kota_asal_id');
		return $this->db->count_all_results();
	}
}
