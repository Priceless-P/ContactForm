<?php

require_once 'Database.php';

class Methods
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();

    }

    public function insert(string $name, string $email, string $subject, string $message)
    {

        $this->db->query("INSERT INTO Contact_form (name, email, subject, message) 
                    VALUES  (:name, :email, :subject, :message)");
        $this->db->bind(':name', $name);
        $this->db->bind(':email', $email);
        $this->db->bind(':subject', $subject);
        $this->db->bind(':message', $message);
        if ($this->db->execute())
            return true;
        else
            return false;
    }

    public function retrieve()
    {
        $this->db->query("SELECT * FROM Contact_form");
        return $this->db->get_all();
    }
}
