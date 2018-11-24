<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 15:31
 */

class Activity extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ActivityModel');
    }

    public function index()
    {
        $data = array();
        $data['custom_css'] = '';
        $this->load->view('header_view', $data);
        $this->load->view('activities/activities_view', $data);
        $data['custom_js'] = $this->load->view('activities/activities_view_js', $data, TRUE);
        $this->load->view('footer_view', $data);

    }

    public function getActivityList()
    {
        $result = $this->ActivityModel->getActivityList($this->input->post());
        echo json_encode($result);
    }

    public function addActivity()
    {
        $result = $this->ActivityModel->addActivity($this->input->post());
        redirect('/Activity');
    }

    public function updateActivity()
    {
        $result = $this->ActivityModel->updateActivity($this->input->post());
        if ($result == TRUE)
            redirect('/Activity');
        else
            die('FALLÓ');
    }

    public function deleteActivity()
    {
        $id = $this->input->post('IDENTIFICADOR');
        $result = $this->ActivityModel->deleteActivity($id);
        redirect('/Activity');
    }

    public function add()
    {
        $this->load->model('MonitorModel');
        $data = array();
        $data['monitors'] = $this->MonitorModel->getMonitorList();
        $data['custom_css'] = '';
        $data['custom_js'] = '';
        $this->load->view('footer_view', $data);
        $this->load->view('header_view', $data);
        $this->load->view('activities/activities_add', $data);

    }
}