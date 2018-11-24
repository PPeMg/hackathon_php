<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 15:26
 */

class Patients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PatientModel');
    }

    public function getPatientsList()
    {
        $result = $this->PatientModel->getPatientList($this->input->post());
        echo json_encode($result);
    }

    public function addPatient()
    {
        $result = $this->PatientModel->addPatient($this->input->post());
        //if($result){
            redirect('/Patients', 'refresh');
        //}
    }

    public function updatePatient()
    {

    }

    public function deletePatient()
    {

    }

    public function index() {
        $data = array();
        $data['custom_css'] = '';
        $data['custom_js'] = '';

        $this->load->view('header_view', $data);
        $this->load->view('patients/patients_list_view', $data);
        $data['custom_js'] = $this->load->view('patients/dtPatients_List.js', $data, TRUE);
        $this->load->view('footer_view', $data);
    }
}