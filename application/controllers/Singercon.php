<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Singercon extends CI_Controller {

    function Singercon()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SingerModel');
    }

    function getAjaxData(){

        //1，从url地址里面取出参数
        $params = $this->uri->uri_to_assoc();
        //判断参数数组里面是否有name
    $id=$params['id'];
$introduce=$params['introduce'];
$singer_icon_url=$params['singer_icon_url'];
        if (!empty($params['name'])){
            $name = $params['name'];

        }
        $formdata=$params;
        $where='id='.$id;
        $data1['singers'] = $this->SingerModel->updataSinger($formdata,$where);

    }
	 function index()
	{
        $data['singers'] = $this->SingerModel->getSinger();
//
		$this->load->view('singer',$data);
	}
}
