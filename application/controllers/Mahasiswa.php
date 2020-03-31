<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Mahasiswa extends CI_Controller
{
	
	function index()
	{
		$this->load->view('data_mahasiswa');
	}

	function tambah()
	{
		$this->load->view('tambah_mahasiswa');
	}
	function data()
	{
		$this->load->view('datamahasiswa');
	}
}