<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Kontrak_m');
	}


	public function index()
	{

		$data = [
			'title' => 'Kontrak',
		];
		$this->template->load('layouts/contents', 'kontrak_data', $data);
	}

	function get_ajax()
	{
		$model = $this->Kontrak_m;
		$kontrak = $model->get_datatables();
		$data = array();
		$no = @$_POST['start'];
		foreach ($kontrak as $key => $dt) {

			$row = array();
			// $row++;
			$row[] = $dt->nama;
			$row[] = $dt->nik;
			$row[] = $dt->nama_jabatan;
			$row[] = $dt->tgl_kontrak;
			$row[] = $dt->tgl_mulai;
			$row[] = $dt->tgl_akhir;
			$row[] = $dt->status == 1 ? '<span class="badge text-bg-success">aktif</span>' : '<span class="badge text-bg-light">tidak aktif</span>';
			$row[] = '<td>
            <div class="dropdown d-inline-block">
                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ri-more-fill align-middle"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
				
                    <li><a id="set_detail" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#detailKontrakModal" data-nama="' . $dt->nama . '" data-nik="' . $dt->nik . '" data-tempat_lahir="' . $dt->tempat_lahir . '" data-tgl_lahir="' . $dt->tgl_lahir . '" data-jenis_kelamin="' . $dt->jenis_kelamin . '" data-alamat="' . $dt->alamat . '" data-telp="' . $dt->telp . '" data-jabatan="' . $dt->nama_jabatan . '" data-tgl_kontrak="' . $dt->tgl_kontrak . '" data-tgl_mulai="' . $dt->tgl_mulai . '" data-tgl_akhir="' . $dt->tgl_akhir . '" data-status="' . $dt->status . '"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                    <li><a href="' . base_url('kontrak/edit/') . $dt->id_kontrak . '" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                    <li>
					<form action="' . base_url('kontrak/delete') . '" method="post">
						<input type="hidden" name="id_kontrak" value="' . $dt->id_kontrak . '">
                        <button  type="submit" class="btn btn-xs "><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</button>
					<form>
                    </li>
                </ul>
            </div>
        </td>';
			$data[] = $row;
		}
		$output = array(
			"draw" => @$_POST['draw'],
			"recordsTotal" => $model->count_all(),
			"recordsFiltered" => $model->count_filtered(),
			"data" => $data,
		);
		// output to json format
		echo json_encode($output);
	}

	public function detail($nik)
	{
		$this->session->set_userdata(['menu_active' => 'employee', 'sub_menu_active' => 'employee']);
		$data = [
			'title' => 'Detail Karyawan',
			'employee' => $this->Employee_m->get_employee($nik)->row(),
		];

		// print_r($data['employee']);
		// die;

		$this->template->load('layouts/contents', 'employee_detail', $data);
	}

	public function add()
	{
		$pegawai = $this->api_request->pegawai();
		$jabatan = $this->api_request->jabatan();
		// var_dump($pegawai);
		// die;
		$data = [
			'title' => 'Buat Kontrak',
			'pegawai' => $pegawai,
			'jabatan' => $jabatan,
			// 'pegawai' => $this->db->get('tb_pegawai')->result(),
			// 'jabatan' => $this->db->get('tb_jabatan')->result(),
		];
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('tgl_kontrak', 'Tanggal Kontrak', 'required');
		$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
		$this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');
		if ($this->form_validation->run() == false) {
			$this->template->load('layouts/contents', 'kontrak_add', $data);
		} else {

			$this->Kontrak_m->addKontrak();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Selamat, Data berhasil disimpan!
                    </div>');
			redirect('kontrak');
		}
	}
	public function edit($id_kontrak)
	{
		$pegawai = $this->api_request->pegawai();
		$jabatan = $this->api_request->jabatan();
		$data = [
			'title' => 'Edit Kontrak',
			'pegawai' => $pegawai,
			'jabatan' => $jabatan,
			'kontrak' => $this->Kontrak_m->getKontrak($id_kontrak)->row(),
		];
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('tgl_kontrak', 'Tanggal Kontrak', 'required');
		$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
		$this->form_validation->set_rules('tgl_akhir', 'Tanggal Akhir', 'required');
		if ($this->form_validation->run() == false) {
			$this->template->load('layouts/contents', 'kontrak_edit', $data);
		} else {

			$this->Kontrak_m->editKontrak();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Selamat, Data berhasil disimpan!
                    </div>');
			redirect('kontrak');
		}
	}

	public function delete()
	{
		$this->Kontrak_m->deleteKontrak();
		$this->session->set_flashdata('message', '<div style="opacity: .6" class="alert alert-success" role="alert">
            Selamat! Data berhasil dihapus!
            </div>');
		redirect('kontrak');
	}
}
