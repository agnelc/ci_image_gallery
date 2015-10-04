<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_model extends CI_Model {

	private $table = "images";

	public function all($limit = 8)
	{
		$this->db->limit($limit);
		$this->db->offset( $this->uri->segment(3) );
		return $this->db->get($this->table);
	}

	public function count()
	{
		return $this->db->count_all_results($this->table);
	}

	public function latest()
	{
		$this->db->order_by("created_at", "desc");
		
		return $this;
	}

}