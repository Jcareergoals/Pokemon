.<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pokemons extends CI_Controller {
	public function index()
	{
		$this->load->view('pokemons');
	}
}