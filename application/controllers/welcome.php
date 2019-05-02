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
	public function school_list()
	{
		$data['page']='list';
		$this->load->view('all',$data);
	}
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
	public function disagrees()
	{
		$data['page']='disagree';
		$this->load->view('all',$data);
	}
	public function accessibility_statement()
	{
		$data['page']='accessibility';
		$this->load->view('all',$data);
	}
	public function website_rules()
	{
		$data['page']='websiterule';
		$this->load->view('all',$data);
	}
	public function rules_n_regulation()
	{
		$data['page']='rulesregulation';
		$this->load->view('all',$data);
	}
	public function reaction()
	{
		$data['page']='reactions';
		$this->load->view('all',$data);
	}
	public function sitemap()
	{
		$data['page']='sitemaps';
		$this->load->view('all',$data);
	}
	public function help()
	{
		$data['page']='helps';
		$this->load->view('all',$data);
	}
	public function copyrights()
	{
		$data['page']='copyright';
		$this->load->view('all',$data);
	}
	public function privacy_policy()
	{
		$data['page']='privacy';
		$this->load->view('all',$data);
	}
	public function hyperlink_policy()
	{
		$data['page']='hyperlink';
		$this->load->view('all',$data);
	}
	public function storydetails()
	{
		$data['page']='story';
		$this->load->view('all',$data);
	}
	public function gondaschool()
	{
		$data['page']='gonda';
		$this->load->view('all',$data);
	}
	public function badaunschool()
	{
		$data['page']='badaun';
		$this->load->view('all',$data);
	}
	public function gorakhpurschool()
	{
		$data['page']='gorakhpur';
		$this->load->view('all',$data);
	}
	public function meerut()
	{
		$data['page']='meerutschool';
		$this->load->view('all',$data);
	}
}
