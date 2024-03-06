<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
	    $readAPI = file_get_contents('https://al-quran-8d642.firebaseio.com/data.json?print=pretty');
        $data['api'] = json_decode($readAPI, true);

        // echo "<pre>";
        // print_r($data);

		// $data['divisis'] = $this->divisi_model->getAll();
    
		$this->load->view('index', $data);
		// $this->load->view('admin/template/footer');
	}


}
