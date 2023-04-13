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
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->JaarLaatsteUitbarsting</td>
                        <td>$result->AantalSlachtoffers</td>
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