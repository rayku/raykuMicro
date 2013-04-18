<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Rayku
 *
 * An open source course dependency management system
 *
 * @package     RaykuMicro
 * @author      Samuel Haruna
 * @copyright   Copyright (c) 2012 - 2022, Rayku
 * @license   
 * @link        http://ca.linkedin.com/pub/samuel-haruna/24/90/182      
 * @since       Version 1.0
 * @filesource BASEPATH/application/model/UserModel.php
 */

// ------------------------------------------------------------------------

class TutorModel extends CI_Model{
    
    var $archive = array();

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    public function getAllTutors()
    {
        $this->db->select("*");
        $query = $this->db->get("rayku_tutor");
        return $query->result_array();
    }
    public function getSingleTutor($id)
    {
        $this->db->where("tutor_id", $id);
        $query = $this->db->get("fos_user_user");

        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }
    public function startBroadcast(){
        $data = array(
            'tutor_id' => $this->session->userdata('tutor_id'),
            'broadcast_secret' => 'F9b1jKL',
            'start' => date('Y-m-d H:i:s', now())
        );
        $this->db->insert('broadcast_session', $data); 

        $this->db->select('broadcast_id');
        $this->db->select('broadcast_secret');
        $this->db->where('broadcast_secret', 'F9b1jKL');
        $query = $this->db->get('broadcast_session');
        if($query->num_rows() > 0){
            foreach($query->result() as $rows){
                $broadcastData = array(
                    'room'     => $rows->broadcast_id,
                    'secret'     => $rows->broadcast_secret
                );
            }
            return $broadcastData;
        }
        return false;
    }
    public function activeBroadcasts()
    {
        $broadcast = array();
        $this->db->select('b.broadcast_id, b.tutor_id, b.start, b.end, u.fname, u.lname, u.username');
        $this->db->from('broadcast_session b');
        $this->db->join('fos_user_user u', 'b.tutor_id = u.tutor_id');
        $query = $this->db->get();

        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
}