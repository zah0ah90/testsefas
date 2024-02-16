<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_model');
		$this->load->model('Crud_model');
	}


	public function index()
	{
		$data = [
			'jabatan' => $this->Crud_model->view(null, 'tbl_jabatan', null)->result(),
			'kota' => $this->Crud_model->view(null, 'tbl_kota', null)->result()
		];
		$this->load->view('home', $data);
	}

	function get_data_karyawan()
	{
		$list = $this->Karyawan_model->get_datatables();
		$data = [];
		$aksi = null;
		$no = $_POST['start'];
		foreach ($list as $field) {
			$no++;
			$row = [];
			$row[] = $no;
			$row[] = $field->nama_karyawan;
			$row[] = $field->tanggal_lahir;
			$row[] = $field->nama_jabatan;
			$row[] = $field->kota_asal;
			$aksi = "<button class='text-white btn btn-sm btn-success ' onclick='editKaryawan(`" . $field->id . "`)' ><i class='far fa-edit'></i> Ubah</button>
			<button class='text-white btn btn-sm btn-danger' onclick='deleteKaryawan(`" . $field->id . "`,`" . $field->nama_karyawan . "`)' ><i class='far fa-trash-alt'></i> Hapus</button>";
			$row[] = $aksi;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Karyawan_model->count_all(),
			"recordsFiltered" => $this->Karyawan_model->count_filtered(),
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	function saveKaryawan()
	{
		$post = $this->input->post(null, true);
		// echo '<pre>';
		// print_r($post);
		// die();
		$data = [
			'nama_karyawan' => $post['nama_karyawan'],
			'tanggal_lahir' => $post['tanggal_lahir'],
			'jabatan_id'       => $post['jabatan'],
			'kota_asal_id'     => $post['kota_asal'],
		];
		$save    = $this->Crud_model->save('tbl_karyawan', $data);
		if ($save > 0) {
			$massage = ['status' => true];
		} else {
			$massage = ['status' => false];
		}
		echo json_encode($massage);
	}

	function editKaryawan($id)
	{
		$data = $this->Crud_model->view(null, 'tbl_karyawan', ['id' => $id])->row();
		echo json_encode($data);
	}

	function updateKaryawan()
	{
		$post = $this->input->post(null, true);
		$data = [
			'nama_karyawan' => $post['nama_karyawan'],
			'tanggal_lahir' => $post['tanggal_lahir'],
			'jabatan_id'       => $post['jabatan'],
			'kota_asal_id'     => $post['kota_asal'],
		];
		$save    = $this->Crud_model->update('tbl_karyawan', ['id' => $post['id']], $data);
		if ($save > 0) {
			$massage = ['status' => true];
		} else {
			$massage = ['status' => false];
		}
		echo json_encode($massage);
	}

	function deleteKaryawan($id)
	{
		$save = $this->Crud_model->delete('tbl_karyawan', ['id' => $id]);
		// $save = 1;
		if ($save == 1) {
			$massage = [
				'status' => true,
			];
		} else {
			$massage = ['status' => false];
		}
		echo json_encode($massage);
	}

	function differenceDays($days1, $days2)
	{
		$datediff =  strtotime($days2) - strtotime($days1);
		echo round($datediff / (60 * 60 * 24));
	}
}
