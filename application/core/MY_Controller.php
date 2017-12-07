<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    public $request;
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        define("BASEURL", base_url());
        define("SITEURL", site_url());
        define("ASSETSURL", base_url('assets'));
        define("USERASSETS", base_url() . "assets/user/");
        define("ADMINASSETS", base_url("assets/admin/"));
        define('ANGULARURL', base_url() . 'angular-js/');
        define('IMGURL', base_url() . 'assets/img/');
        
       //for converting JSON by Angular to Object
        $postdata = file_get_contents("php://input");
        $this->request = json_decode($postdata);
        
    }
    
}    