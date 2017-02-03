<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rank extends CI_Controller {

     public function __construct()
    {
        parent::__construct();

        $this->load->model('m_rank','view_rank');

    }
	 
	 public $data = array(
        'halaman' => 'rank',
        //'main_view' => 'home'
    );

    public function index()
    {
        $this->load->view('rank_user');
    }

    public function ajax_list()
    {
        error_reporting(0);
        $list = $this->view_rank->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $person) {

            $no++;
            $row = array();
	if ($person->ChaClass == 2) { $char = "Swordsman[M]"; }
  	if ($person->ChaClass == 1) { $char = "Brawler[M]"; }
	if ($person->ChaClass == 4) { $char = "Archer[F]"; }
	if ($person->ChaClass == 8) { $char = "Shaman[F]"; }
  	if ($person->ChaClass == 16) { $char = "XTRM [M]"; }
	if ($person->ChaClass == 32) { $char = "XTRM [F]"; }
	if ($person->ChaClass == 64) { $char = "Brawler[F]"; }
	if ($person->ChaClass == 128) { $char = "Swordsman[F]"; }
	if ($person->ChaClass == 256) { $char = "Archer[M]";}
	if ($person->ChaClass == 512) { $char = "Shamman[M]";}
	if ($person->ChaSchool == 0) { $school = "Sacred Gate";}
    if ($person->ChaSchool == 1) { $school = "Mystic Peak";}
    if ($person->ChaSchool == 2) { $school = "Phoenix";}
            $row[] = $no;
			$row[] = $person->ChaName;
            $row[] = $person->ChaLevel;
			$row[] = $char;
			$row[] = $school;
			$row[] = $person->ChaPkWin;
			$row[] = $person->ChaPkLoss;


            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->view_rank->count_all(),
                        "recordsFiltered" => $this->view_rank->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

}