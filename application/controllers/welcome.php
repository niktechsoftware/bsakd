<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page']='content';
$this->load->view('all',$data);
	}
	public function about()
	{
		$data['page']='aboutus';
$this->load->view('all',$data);
	}
	public function structure()
	{
		$data['page']='structures';
		$this->load->view('all',$data);
	}
	public function member()
	{
		$data['page']='memberlist';
		$this->load->view('all',$data);
	}
	public function shasna()
	{
		$data['page']='shasnadesh';
		$this->load->view('all',$data);
	}
	// public function rtipage()
	// {
	// 	$data['page']='rti';
	// 	$this->load->view('all',$data);
	// }
	public function rtepage()
	{
		$data['page']='rte';
		$this->load->view('all',$data);
	}
	public function report()
	{
		$data['page']='reportpage';
		$this->load->view('all',$data);
	}
	public function gallery()
	{
		$data['page']='gallerys';
		$this->load->view('all',$data);
	}
	public function video()
	{
		$data['page']='videos';
		$this->load->view('all',$data);
	}
	public function etender()
	{
		$data['page']='etenders';
		$this->load->view('all',$data);
	}
	public function suggestion()
	{
		$data['page']='suggestions';
		$this->load->view('all',$data);
	}
	public function contact()
	{
		$data['page']='contacts';
		$this->load->view('all',$data);
	}
	public function school_information()
	{
		$data['page']='school';
		$this->load->view('all',$data);
	}
}

