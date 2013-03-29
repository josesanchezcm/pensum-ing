<?php
class VerifyLogin extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  function index()
  {
        //Go to private area
       redirect('usuario/index', 'refresh');
 

  }
}