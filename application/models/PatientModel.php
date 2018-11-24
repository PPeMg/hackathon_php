<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 15:30
 */

class PatientModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getPatientList($parameters = array())
    {

        $result = $this->db->select('*')
            ->get('pacientes')
            ->result();
        return $result;
    }

    public function addPatient($parameters = array())
    {
        $fieldsToInsert = array(
            'DNI' => !empty($parameters['dni']) ? $parameters['dni'] : '',
            'NOMBRE' => !empty($parameters['name']) ? $parameters['name'] : '',
            'APELLIDOS' => !empty($parameters['lastName']) ? $parameters['lastName'] : '',
            'TELEFONO' => !empty($parameters['email']) ? $parameters['email'] : 0,
            'EMAIL' => !empty($parameters['telephone']) ? $parameters['telephone'] : '',
        );
        $this->db->insert('pacientes', $fieldsToInsert);

        return array(TRUE);
    }

    public function updatePatient($parameters = array())
    {
        if(!empty($parameters['id'])){
            $fieldsToInsert = array(
                'DNI' => !empty($parameters['dni']) ? $parameters['dni'] : '',
                'NOMBRE' => !empty($parameters['name']) ? $parameters['name'] : '',
                'APELLIDOS' => !empty($parameters['lastName']) ? $parameters['lastName'] : '',
                'TELEFONO' => !empty($parameters['email']) ? $parameters['email'] : 0,
                'EMAIL' => !empty($parameters['telephone']) ? $parameters['telephone'] : '',
            );
            $this->db->update('pacientes', $fieldsToInsert, array('IDENTIFICADOR' => $parameters['id']));
            return array(TRUE);
        } else {
            return array(FALSE);
        }
    }

    public function deletePatient($id = NULL)
    {
        if(!empty($id)){
            $this->db->delete('pacientes', array('IDENTIFICADOR' => $id));
            return array(TRUE);
        } else {
            return array(FALSE);
        }

    }
}