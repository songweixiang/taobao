<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page2 extends CI_Controller {
    function page2()
    {
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
	    $id= 5;//$id= $this->>url->get_poat('id');
        $data['id']=$id;
		$this->load->view('page2',$data);
	}
}
