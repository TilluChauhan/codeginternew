<?php

namespace App\Models;

use CodeIgniter\Model;

class CurdModel extends Model
{
	
	public function insert($table = true, $data =null){
		$q = $this->db->table($table)->insert($data);
		if($q) {return $this->db->insertID();}
	} 
	 public function get($select,$table, $where, $orderby, $order = null){
		 $builder = $this->db->table($table);
		 $builder->select($select);
		 if(isset ($where) && count($where) >0)
		 {
			 $builder->where($where);
		 }
		 
		 $builder->orderBy($orderby,$order);
		 $query =$builder->get();
		 return $query->getResult();
	 }
	
	
}
