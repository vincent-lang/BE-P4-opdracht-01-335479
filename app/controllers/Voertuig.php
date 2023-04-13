<?php

class Voertuig extends BaseController
{

    private $voertuigInfo;

    public function __construct()
    {
        $this->voertuigInfo = $this->model('VoertuigModel');
    }

    public function index()
    {
        $Voertuigen = $this->voertuigInfo->getVoertuigen();

        $rows = '';
        foreach ($Voertuigen as $result) {
            $rows .= "<tr>
                        <td>$result->Voornaam</td>
                        <td>$result->Tussenvoegsel</td>
                        <td>$result->Achternaam</td>
                        <td>$result->Mobiel</td>
                        <td>$result->DatumInDienst</td>
                        <td>$result->AantalSterren</td>
                    </tr>";
        }

        $data = [
            'title' => 'Instructeurs in dienst',
            'aantal_instructeurs' => 'Aantal Instructeurs: 5',
            'records' => 'info uit de database',
            'rows' => $rows
        ];

        $this->view('voertuig/index', $data);
    }
}