<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 15:28
 */

class MonitorModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getMonitorList($parameters = array())
    {
        $this->db->select('*');
        isset($parameters['IDENTIFICADOR']) ? $this->db->where('IDENTIFICADOR', $parameters['IDENTIFICADOR']) : NULL;
        $result = $this->db->get('monitores')
            ->result();
        return $result;
    }

    public function addMonitor($parameters = array())
    {
        $fieldsToInsert = array(
            'DNI' => !empty($parameters['DNI']) ? $parameters['DNI'] : '',
            'NOMBRE' => !empty($parameters['NOMBRE']) ? $parameters['NOMBRE'] : '',
            'APELLIDOS' => !empty($parameters['APELLIDOS']) ? $parameters['APELLIDOS'] : '',
            'TELEFONO' => !empty($parameters['TELEFONO']) ? $parameters['TELEFONO'] : 0,
            'EMAIL' => !empty($parameters['EMAIL']) ? $parameters['EMAIL'] : '',
        );
        $this->db->insert('monitores', $fieldsToInsert);

        return array(TRUE);
    }

    public function updateMonitor($parameters = array())
    {

    }

    public function deleteMonitor($id)
    {

    }
}