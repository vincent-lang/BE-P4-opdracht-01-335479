<?php

class Vulkaan extends BaseController
{

    private $vulkaanInfo;

    public function __construct()
    {
        $this->vulkaanInfo = $this->model('VulkaanModel');
    }

    public function index()
    {
        $vulkaans = $this->vulkaanInfo->getVulkaans();

        // var_dump($voetballers);
        $rows = '';
        foreach ($vulkaans as $result) {
            $rows .= "<tr>
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->JaarLaatsteUitbarsting</td>
                        <td>$result->AantalSlachtoffers</td>
                    </tr>";
        }

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'records' => 'info uit de database',
            'rows' => $rows
        ];

        $this->view('vulkaan/index', $data);
    }
}