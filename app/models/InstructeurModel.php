<?php

class InstructeurModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();    
    }

    public function getInstructeurs()
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

    public function getVoertuigen()
    {
        $sql = "SELECT Id
                       ,TypeVoertuig.TypeVoertuig
                       ,Voertuig.Type
                       ,voertuig.Kenteken
                       ,voertuig.Bouwjaar
                       ,voertuig.Brandstof
                       ,TypeVoertuig.Rijbewijscategorie
                FROM   TypeVoertuig,Voertuig";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}