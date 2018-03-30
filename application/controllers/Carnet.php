<?php
class Carnet extends CI_Controller {

	public function __construct() {
	   parent::__construct();
	   $this->load->helper('url');
	  //$this->load->library('Ressources/js/Jquery.js');
	}

    public function index($page = 'page d\'accueil')
	{
        if ( ! file_exists(APPPATH.'views/index.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
$this->load->helper('url');

        $this->load->view('templates/header', $data);
        $this->load->view('index');
        $this->load->view('templates/footer', $data);
	}

	public function recette($page = 'La Recette de Poisson')
	{
        if ( ! file_exists(APPPATH.'views/recette.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        //$this->load->library('js/Main.js');
        $this->load->view('recette');
        $this->load->view('templates/footer', $data);
	}

}

