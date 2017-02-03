<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends Public_Controller
{
    public $data = array(
        'halaman' => 'download',
        'main_view' => 'download'
    );

    public function index()
    {
        $this->load->view($this->layout, $this->data);
    }
}
