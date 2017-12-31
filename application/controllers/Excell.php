<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excell extends CI_Controller {

	

	function __construct() {
        parent::__construct();
        $this->load->library('Spreadsheet_Excel_Reader');
    }

	public function index()
	{


		$excel = new Spreadsheet_Excel_Reader();

		
		$excel->read('public/sample.xls'); // set the excel file name here   

		$data['data_excell']=$excel->sheets[0]['cells'];

        $this->load->view('excell',$data);

	}
}
