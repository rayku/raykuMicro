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

class UserModel extends CI_Model{
	
    var $archive = array();

	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
    public function checkCredentials($email, $password)
    {
        $this->db->where("email", $email);
        $password = $password;
        $this->db->where("password", $password);
        $query=$this->db->get("fos_user_user");
      
        if($query->num_rows() > 0){
            foreach($query->result() as $rows)
            {
                //add all data to session
                $sessionData = array(
                    'user_id'     => $rows->id,
                    'tutor_id' => $rows->tutor_id,
                    'user_name'   =>$rows->username,
                    'first_name'     => $rows->fname,
                    'last_name'     => $rows->lname,
                    'user_email'    => $rows->email,
                    'logged_in'     => TRUE,
                );
            }
            $this->session->set_userdata($sessionData);
            return true;
        }
        return false;
    }
    public function getUser($id){
        $this->db->where("id", $id);
        $query=$this->db->get("fos_user_user");

        if($query->num_rows() > 0){
            return $query->result_array();
        }
    }
    public function editUser($username, $fname=NULL, $lname=NULL, $school=NULL, $school_year=NULL, $degree=NULL, $about=NULL)
    {
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'school' => $school,
            'school_year' => $school_year,
            'degree' => $degree,
            'about' => $about
        );
        $this->db->update('fos_user_user', $data); 

        $this->db->where("username", $username);
        $query=$this->db->get("fos_user_user");

        if($query->num_rows() > 0){
            foreach($query->result() as $rows)
            {
                //add all data to session
                $sessionData = array(
                    'first_name'     => $rows->fname,
                    'last_name'     => $rows->lname,
                );
            }
            $this->session->set_userdata($sessionData);
            return true;
        }
        return false;
    }
    public function registerUser($username, $email, $password)
    {
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'fname' => 'firstname',
            'lname' => 'lastname',
            'school' => 'school',
            'school_year' => 'e.g. Undegraduate',
            'degree' => 'e.g. Maths',
            'about' => 'e.g. Trigonometry'
            //'password' => $this->encrypt->sha1('password')
        );
        $this->db->insert('fos_user_user', $data); 

        $this->db->where("email", $email);
        $query=$this->db->get("fos_user_user");

        if($query->num_rows() > 0){
            foreach($query->result() as $rows)
            {
                //add all data to session
                $sessionData = array(
                    'user_id'     => $rows->id,
                    'tutor_id' => $rows->tutor_id,
                    'user_name'   =>$rows->username,
                    'first_name'     => $rows->fname,
                    'last_name'     => $rows->lname,
                    'user_email'    => $rows->email,
                    'logged_in'     => TRUE,
                );
            }
            $this->session->set_userdata($sessionData);
            return true;
        }
        return false;
    }
}