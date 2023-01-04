<?php

namespace App\Controllers;
use Codeigniter\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
	public function personalindex()
    {
        return view('personal/index');
    }
	
	public function insert(){
		$frmdata =$this->request->getPost();
		print_r($frmdata);
		
		$add = array(
			'name'   => $frmdata['name'],
			'mobile' => $frmdata['mobile'],
			'email'  => $frmdata['email'],	
			);
			
			$insert =$this->curd_model->insert('user',$add);
			
	}
	
	
	public function show(){
		
		$show = $this->curd_model->get('*', 'user',array(), 'id', 'ASC');
		print_r($show);
	}
	
	
	
}
