<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 15:33
 */

class ActivityModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getActivityList($parameters = array())
    {
        $this->db->select('*');
        isset($parameters['IDENTIFICADOR']) ? $this->db->where('IDENTIFICADOR', $parameters['IDENTIFICADOR']) : NULL;
        $result = $this->db->get('actividades')
            ->result();
        return $result;
    }

    public function addActivity($parameters = array())
    {
        $fieldsToInsert = array(
            'TITULO' => !empty($parameters['TITULO']) ? $parameters['TITULO'] : '',
            'DESCRIPCION' => !empty($parameters['DESCRIPCION']) ? $parameters['DESCRIPCION'] : '',
            'NUM_PLAZAS' => !empty($parameters['NUM_PLAZAS']) ? $parameters['NUM_PLAZAS'] : '',
            'FECHA' => !empty($parameters['FECHA']) ? $parameters['FECHA'] : '',
            'HORA' => '',
        );
        $this->db->insert('actividades', $fieldsToInsert);
        $idActivity = $this->db->insert_id();
        $this->db->insert('monitores_actividades', array('ACTIVIDAD' => $idActivity, 'MONITOR' => $parameters['MONITOR']));
    }

    public function updateActivity($parameters = array())
    {

    }

    public function deleteActivity($parameters = array())
    {

    }
}