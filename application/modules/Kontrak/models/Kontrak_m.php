<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak_m extends CI_Model
{

	// start datatables
	var $db_from = 'tb_kontrak'; //set column field database for datatable orderable
	var $column_order = array(null, 'nik', 'nama', 'nama_jabatan', 'tgl_kontrak', 'tgl_mulai', 'tgl_akhir'); //set column field database for datatable orderable
	var $column_search = array('nik', 'nama', 'nama_jabatan', 'tgl_kontrak'); //set column field database for datatable searchable
	var $order = array('nama' => 'asc'); // default order

	private function _get_datatables_query()
	{
		$this->db->select('*');
		$this->db->from('tb_kontrak tk');
		$this->db->join('tb_pegawai tp', 'tp.id_pegawai = tk.id_pegawai');
		$this->db->join('tb_jabatan tj', 'tj.id_jabatan = tk.id_jabatan');

		$i = 0;
		foreach ($this->column_search as $item) { // loop column
			if (@$_POST['search']['value']) { // if datatable send POST for search
				if ($i === 0) { // first loop
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}
				if (count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if (isset($_POST['order'])) { // here order processing
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	function get_datatables()
	{
		$this->_get_datatables_query();
		if (@$_POST['length'] != -1)
			$this->db->limit(@$_POST['length'], @$_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	function count_all()
	{
		$this->db->from($this->db_from);
		return $this->db->count_all_results();
	}
	// end datatables

	public function getKontrak($id_kontrak = null)
	{
		if ($id_kontrak) {
			return $this->db->query("select * from tb_kontrak tk, tb_pegawai tp, tb_jabatan tj where tk.id_pegawai=tp.id_pegawai and tk.id_jabatan=tj.id_jabatan and id_kontrak=$id_kontrak");
		} else {
			return $this->db->query("select * from tb_kontrak tk, tb_pegawai tp, tb_jabatan tj where tk.id_pegawai=tp.id_pegawai and tk.id_jabatan=tj.id_jabatan ");
		}
	}

	public function addKontrak()
	{
		$data = [
			'id_pegawai' => $this->input->post('nama', true),
			'id_jabatan' => $this->input->post('jabatan', true),
			'tgl_kontrak' => $this->input->post('tgl_kontrak', true),
			'tgl_mulai' => $this->input->post('tgl_mulai', true),
			'tgl_akhir' => $this->input->post('tgl_akhir', true),
		];
		// var_dump($data);
		// die;
		$this->db->insert('tb_kontrak', $data);
	}

	public function editKontrak()
	{
		$data = [
			'tgl_kontrak' => $this->input->post('tgl_kontrak', true),
			'tgl_mulai' => $this->input->post('tgl_mulai', true),
			'tgl_akhir' => $this->input->post('tgl_akhir', true),
		];
		// var_dump($data);
		// die;
		$this->db->where('id_kontrak', $this->input->post('id_kontrak'));
		$this->db->update('tb_kontrak', $data);
	}
}
