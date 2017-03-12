<?php

class People extends CI_Model {

        public $firstname;
        public $lastname;
        public $cnp;

        public function get_by_cnp($cnp)
        {
                $query = $this->db->query("SELECT * FROM people WHERE CNP=".$cnp." LIMIT 0,1");
                return $query->result();
        }
/*
        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
*/
}
