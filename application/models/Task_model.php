<?php
class Task_model extends CI_Model
{
	public $table = 'tbl_task';
	public $id = 'id_task';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}


	public function insert_task($data)
	{
		$this->db->insert('tbl_task', $data);
		$insert_id = $this->db->insert_id();

		return  $insert_id;
	}

	public function get_by_id($id)
	{
		$this->db->where('id_task', $id);
		return $this->db->get('task')->row();
	}

	//update
	public function update_user($id, $data)
	{
		$this->db->where('id_task', $id);
		$this->db->update('task', $data);
	}

	//delete
	public function delete($data)
	{
		$this->db->where('id_task', $data);
		$this->db->delete('task');
	}

	public function select_task()
	{
		return $this->db->get('task')->result();
	}

	public function select_bank()
	{
		return $this->db->get('tbl_bank')->result();
	}

	public function buat_filter($data)
	{
		$this->db->insert('tbl_filter', $data);
	}

	public function select_nominaltask($id_task)
	{
		return $this->db->query('select total_nominal from tbl_task where id_task = "' . $id_task . '"')->result();
	}
}
