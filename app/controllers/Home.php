<?php

class Home extends BaseController
{
    public function index($id = NULL,$name = NULL,$hoogte = NULL,$land = NULL,$jaarlaatsteuitbarsting = NULL,$aantalslachtoffers = NULL)
    {

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'id'    => $id,
            'name'  => $name,
            'hoogte'  => $hoogte,
            'land'=> $land,
            'jaarlaatsteuitbarsting' => $jaarlaatsteuitbarsting,
            'aantalslachtoffers' => $aantalslachtoffers
        ];

        $this->view('home/index', $data);
    }
}