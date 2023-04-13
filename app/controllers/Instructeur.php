<?php

class Instructeur extends BaseController
{

    private $instructeurInfo;

    public function __construct()
    {
        $this->instructeurInfo = $this->model('InstructeurModel');
    }

    public function index()
    {
        $Instructeurs = $this->instructeurInfo->getInstructeurs();

        $rows = '';
        foreach ($Instructeurs as $result) {
            $rows .= "<tr>
                        <td>$result->Voornaam</td>
                        <td>$result->Tussenvoegsel</td>
                        <td>$result->Achternaam</td>
                        <td>$result->Mobiel</td>
                        <td>$result->DatumInDienst</td>
                        <td>$result->AantalSterren</td>
                        <td>
                        <a href='voertuig/id/{$result->Id}'>
                        <img src='../../../public/img/car.png' alt='car.png'>
                        </a>
                        </td>
                    </tr>";
        }

        $data = [
            'title' => 'Instructeurs in dienst',
            'aantal_instructeurs' => 'Aantal Instructeurs: 5',
            'records' => 'info uit de database',
            'rows' => $rows
        ];

        $this->view('instructeur/index', $data);
    }
}