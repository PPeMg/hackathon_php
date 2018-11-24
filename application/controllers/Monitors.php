<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 15:22
 */

class Monitors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MonitorModel');
    }

    public function index()
    {
        $data = array();
        $data['custom_css'] = '';
        $data['custom_js'] = $this->load->view('monitors/monitors_view_js', $data, TRUE);
        $this->load->view('footer_view', $data);
        $this->load->view('header_view', $data);
        $this->load->view('monitors/monitors_view', $data);


    }

    public function getMonitorsList()
    {
        $result = $this->MonitorModel->getMonitorList($this->input->post());
        echo json_encode($result);
    }

    public function addMonitor()
    {
        $result = $this->MonitorModel->addMonitor($this->input->post());
        echo json_encode($result);
    }

    public function updateMonitor()
    {

    }

    public function deleteMonitor()
    {

    }

    public function add()
    {
        $data = array();
        $data['custom_css'] = '';
        $data['custom_js'] = '';
        $this->load->view('footer_view', $data);
        $this->load->view('header_view', $data);
        $this->load->view('monitors/monitors_add', $data);
    }
}