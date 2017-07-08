<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajaxcon extends CI_Controller {
    function ajaxcon()
    {
        parent::__construct();
        $this->load->helper('url');

    }
    function getAjaxData(){
        //1，从url地址里面取出参数
        $name = $this->input->get_post('name');
        echo $name."呵呵呵呵呵";
    }


	 function index()
	{

		$this->load->view('ajax');
	}
}
