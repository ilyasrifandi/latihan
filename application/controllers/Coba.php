<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Coba extends CI_Controller
{
	
	function index()
	{
		$this->load->view('coba1');
	}
	function form()
	{
		$this->load->view('form');
	}
}