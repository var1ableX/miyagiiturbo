<?php namespace Miyagiiweb\controllers;

require_once __DIR__ . '/../bootstrap.php';

use Miyagiiweb\app\EM;

class UserController {
    public function allAction () {

        echo "Im here now!";
        $EM = new EM();
        $records = $EM->EntityManager()
            ->getRepository('Miyagiiu')
            ->findAll();

        return $records;
        //return array('users' => $records);
        //return new Response (json_encode(array('users' => $records)));
    }
}