<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aQuran extends CI_Controller {
   
    public function testApi(){
        $readAPI = file_get_contents('https://al-quran-8d642.firebaseio.com/data.json?print=pretty');
        $data = json_decode($readAPI, true);

        echo "<pre>";
        print_r($data);
    }
}