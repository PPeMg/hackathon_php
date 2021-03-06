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
        $this->load->view('header_view', $data);
        $this->load->view('monitors/monitors_view', $data);
        $data['custom_js'] = $this->load->view('monitors/monitors_view_js', $data, TRUE);
        $this->load->view('footer_view', $data);


    }

    public function getMonitorsList()
    {
        $result = $this->MonitorModel->getMonitorList($this->input->post());
        echo json_encode($result);
    }

    public function addMonitor()
    {
        $result = $this->MonitorModel->addMonitor($this->input->post());
        redirect('/Monitors');
    }

    public function updateMonitor()
    {
        $result = $this->MonitorModel->updateMonitor($this->input->post());
        if ($result[0])
            redirect('/Monitors');

    }

    public function deleteMonitor()
    {
        $id = $this->input->post('IDENTIFICADOR');
        $this->MonitorModel->deleteMonitor($id);
        redirect('/Monitors');
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

    public function edit($id = NULL)
    {

        $parameters = array();
        $parameters['IDENTIFICADOR'] = $id;
        $monitor = $this->MonitorModel->getMonitorList($parameters);
        $data = array();
        $data['custom_css'] = '';
        $data['custom_js'] = '';
        $data['monitor'] = $monitor[0];
        $this->load->view('footer_view', $data);
        $this->load->view('header_view', $data);
        $this->load->view('monitors/monitors_edit', $data);
    }
}