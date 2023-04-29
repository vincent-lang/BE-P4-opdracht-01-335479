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
                        <a href='../voertuig/index" . $result->Id . "'>
                        <img src='../../../public/img/car.png' alt='car.png'>
                        </a>
                        </td>
                    </tr>";
        }
        $data = [
            'title' => 'Instructeurs in dienst',
            'aantal_instructeurs' => 'Aantal instructeurs: 5',
            'records' => 'info uit de database',
            'rows' => $rows
        ];

        $this->view('instructeur/index', $data);
    }

    public function gebruiktevoertuigen($Id)
    {
        $result = $this->instructeurInfo->getVoertuigen($Id);
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