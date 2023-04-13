<?php

class VoertuigModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();    
    }

    public function getVoertuigen()
    {
        $sql = "SELECT Id
                       ,Voornaam
                       ,Tussenvoegsel
                       ,Achternaam
                       ,Mobiel
                       ,DatumInDienst
                       ,AantalSterren
                FROM   Instructeur ORDER BY AantalSterren DESC";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}