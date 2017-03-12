<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entity extends CI_Controller {

    private function load_via_cnp($cnp){
        $this->load->model('people');
        $ret = $this->people->get_by_cnp($cnp);
        if(count($ret)>0){
            return $ret[0];
        } else {
            return NULL;
        }
    }
    
    public function index()
    {
        $this->load->view('entity/index.php');
    }
    public function webform()
    {
        if(isset($_POST['action-studies'])) {
            $person = $this->load_via_cnp($_POST['cnp']);
            if(!isset($person)){
                $this->load->view('not-found.php');
                return;
            }
            $data['person']=$person;
            
            $query = $this->db->query("SELECT * FROM studies WHERE PeopleID=".$person->ID.' ORDER BY DateStarted DESC');
            $studies = $query->result();
            
            $data['studies'] = $studies;
            
            $this->load->view('entity/webform/studies.php', $data);
        } else
        if(isset($_POST['action-criminal-record'])) {
            $this->load->view('entity/webform/criminal-record.php');
        } else
        if(isset($_POST['action-employment'])) {
            $this->load->view('not-implemented');
        } else {
            $this->load->view('command-not-defined');
        }
    }
}
