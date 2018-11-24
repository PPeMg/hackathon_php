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
        $result = $this->db->select('*')
            ->get('monitores')
            ->result();
        var_dump($result);
        die();
        return $result;
    }

    public function addMonitor($parameters = array())
    {

    }

    public function updateMonitor($parameters = array())
    {

    }

    public function deleteMonitor($id)
    {

    }
}