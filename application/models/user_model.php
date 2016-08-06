<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Api extends REST_Controller
{
	public function get($id ='')
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$id);		
		$this->db->order_by('id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_all(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id');
		$query = $this->db->get();
		return $query->result_array();	
	}
	public function delete($id){
		$this->db->delete('user',array('id'=>$id));
	}
	public function update($id='',$data){
		if($id)
			$this->db->update('user',$data,array('id'=>$id));	
		else
			$this->db->insert('user',$data);	
	}
}
?>