<?php
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Admin');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url('login'));
		}

		// $sesiukmid = $this->session->userdata('id_ukm');
		// $sesiukmnm = $this->session->userdata('nm_ukm');

	}

	function index()
	{
		$data['barang'] = $this->Model_Admin->tampil('tb_barang')->result();
		$this->load->view('Admin/index', $data);
	}

	function pelanggan()
	{
		$data['plg'] = $this->Model_Admin->tampil('pelanggan')->result();
		$this->load->view('Admin/pelanggan', $data);
	}

	function barang()
	{
		$data['barang'] = $this->Model_Admin->tampil('tb_barang')->result();
		$this->load->view('Admin/index', $data);
	}

	function add_barang()
	{
		$this->load->view('Admin/add_barang');
	}

	function hps_brg($id)
	{
		$where = array('id_barang' => $id);
		$this->Model_Admin->hps('tb_barang', $where);
		redirect(base_url('admin/barang'));
	}


	function insbrg()
	{
		$a1 = $_POST['nm_barang'];
		$a2 = $_POST['stok_barang'];
		$a3 = $_POST['disewa'];
		$a4 = $_POST['date'];
		$data = array(
			'nm_barang' => $a1,
			'stok_barang' => $a2,
			'disewa' => $a3,
			'date' => $a4
		);
		$this->Model_Admin->ins('tb_barang', $data);
		redirect(base_url('admin/barang'));
	}

	function edit_brg($id)
	{
		$where = array('id_barang' => $id);
		$data['edit'] = $this->Model_Admin->cariview('tb_barang', $where)->result();
		$this->load->view('Admin/edit_barang', $data);
	}

	function upbrg()
	{
		$id = $_POST['id_barang'];
		$a1 = $_POST['nm_barang'];
		$a2 = $_POST['stok_barang'];
		$a3 = $_POST['disewa'];
		$a4 = $_POST['date'];
		$data = array(
			'nm_barang' => $a1,
			'stok_barang' => $a2,
			'disewa' => $a3,
			'date' => $a4
		);
		$where = array(
			'id_barang' => $id,
		);
		$this->Model_Admin->update('tb_barang', $data, $where);
		redirect(base_url('admin/barang'));
	}

	function insplg()
	{
		$a1 = $_POST['nm_plg'];
		$a2 = $_POST['kp_plg'];
		$a3 = $_POST['jm_plg'];
		$a4 = $_POST['date_plg'];
		$data = array(
			'nm_plg' => $a1,
			'kp_plg' => $a2,
			'jm_plg' => $a3,
			'date_plg' => $a4
		);
		$this->Model_Admin->ins('pelanggan', $data);
		redirect(base_url('admin/pelanggan'));
	}

	function edit_plg($id)
	{
		$where = array('id_plg' => $id);
		$data['edit'] = $this->Model_Admin->cariview('pelanggan', $where)->result();
		$this->load->view('Admin/edit_pelanggan', $data);
	}

	function add_pelanggan()
	{
		$this->load->view('Admin/add_pelanggan');
	}

	function hps_plg($id)
	{
		$where = array('id_plg' => $id);
		$this->Model_Admin->hps('pelanggan', $where);
		redirect(base_url('admin/pelanggan'));
	}

	function upplg()
	{
		$id = $_POST['id_plg'];
		$a1 = $_POST['nm_plg'];
		$a2 = $_POST['kp_plg'];
		$a3 = $_POST['jm_plg'];
		$a4 = $_POST['date_plg'];
		$data = array(
			'nm_plg' => $a1,
			'kp_plg' => $a2,
			'jm_plg' => $a3,
			'date_plg' => $a4
		);

		$where = array(
			'id_plg' => $id
		);

		$this->Model_Admin->update('pelanggan', $data, $where);
		redirect(base_url('admin/pelanggan'));
	}
}
