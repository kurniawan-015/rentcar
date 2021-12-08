<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

 public function index()
	{
		$data['judul'] = "GatotKacaRentCar";
		$this->load->view('v_header',$data);
		$this->load->view('v_index',$data);
		$this->load->view('v_footer',$data);
	}

 public function fleet()
	{
		$data['judul'] = "GatotKacaRentCar";
		$this->load->view('v_header',$data);
		$this->load->view('v_fleet',$data);
		$this->load->view('v_footer',$data);
	}

	public function aboutus()
	{
		$data['judul'] = "GatotKacaRentCar";
		$this->load->view('v_header',$data);
		$this->load->view('v_aboutus',$data);
		$this->load->view('v_footer',$data);
	}

	public function contact()
	{
		$data['judul'] = "GatotKacaRentCar";
		$this->load->view('v_header',$data);
		$this->load->view('v_contact',$data);
		$this->load->view('v_footer',$data);
	}

	public function booking()
	{
		$data['judul'] = "GatotKacaRentCar";
		$this->load->view('v_header',$data);
		$this->load->view('detail_agya',$data);
		$this->load->view('v_footer',$data);
	}

	public function cekout()
	{
		$data['judul'] = "GatotKacaRentCar";
		$this->load->view('v_header',$data);
		$this->load->view('view-data-transaksi',$data);
		$this->load->view('v_footer',$data);
	}

}
