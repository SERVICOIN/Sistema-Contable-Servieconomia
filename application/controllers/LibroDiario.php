<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class LibroDiario extends CI_CONTROLLER
    {
        function __construct(){
            parent::__construct(); 
            $this->load->model('libro_diario');
        }

        public function view($page = 'index')
        {
            if (!file_exists(APPPATH.'views/pages/libro-diario/'.$page.'.php')) {
                // we don't have a page for that
                echo 'no existe',$page;
                show_404();
            } else {
                // load the page
                $this->load->view('pages/libro-diario/'.$page);
            }
        }

        public function addAccount(){
            // $this->load->view('libro_diario/registrarTransaccion');
            if ($this->input->post('guardar')) {
                    $this->libro_diario->addAccount();
                    echo 'Sew ha guardado correctamente';
                }   
        }
    }
?>