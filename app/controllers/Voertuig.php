<?php

class Voertuig extends BaseController
{

    private $voertuigInfo;

    public function __construct()
    {
        $this->voertuigInfo = $this->model('InstructeurModel');
    }

    public function index()
    {
        $Voertuigen = $this->voertuigInfo->getVoertuigen();

        $rows = '';
        foreach ($Voertuigen as $result) {
            $rows .= "<tr>
            <td>$result->TypeVoertuig</td>
            <td>$result->Type</td>
            <td>$result->Kenteken</td>
            <td>$result->Bouwjaar</td>
            <td>$result->Brandstof</td>
            <td>$result->Rijbewijscategorie</td>
                    </tr>";
        }

        $data = [
            'title' => 'Door instructeur gebruikte voertuigen',
            'records' => 'info uit de database',
            'rows' => $rows
        ];

        $this->view('voertuig/index', $data);
    }
}
