<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 15:15
 */

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $data['custom_css'] = '';
        $this->load->view('header_view', $data);
        $data['custom_js'] = $this->load->view('home/home_view_js', $data, TRUE);
        $this->load->view('footer_view', $data);
        $this->load->view('home/home_view');
    }
}