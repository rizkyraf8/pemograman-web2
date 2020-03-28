<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_utama extends CI_Controller {

    public function index()
    {   
        $this->load->view('menuutama_v', null, FALSE);
        
    }

}

/* End of file Menu_utama.php */
