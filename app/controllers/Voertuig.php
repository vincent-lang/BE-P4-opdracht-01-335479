<?php

class Voertuig extends BaseController
{

    private $instructeurInfo;

    public function __construct()
    {
        $this->instructeurInfo = $this->model('InstructeurModel');
    }

    public function index()
    {
        $result = $this->instructeurInfo->getVoertuigen();
        if (empty($result)) {
            $table = "<tr><td>Geen toegewezen voertuigen</td></tr>";
        } else {
        }
        $rows = '';
        foreach ($result as $Voertuigen) {
            $rows .= "<tr>
            <td>$Voertuigen->TypeVoertuig</td>
            <td>$Voertuigen->Type</td>
            <td>$Voertuigen->Kenteken</td>
            <td>$Voertuigen->Bouwjaar</td>
            <td>$Voertuigen->Brandstof</td>
            <td>$Voertuigen->Rijbewijscategorie</td>
                    </tr>";
        }

        $data = [
            'title' => 'Door instructeur gebruikte voertuigen',
            'records' => 'info uit de database',
            'nothing' => $table,
            'rows' => $rows
        ];

        $this->view('voertuig/index', $data);
    }
}