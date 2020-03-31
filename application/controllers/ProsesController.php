<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ProsesController extends CI_Controller
{
	
	function index()
	{
		$this->load->view('form');
	}

}
