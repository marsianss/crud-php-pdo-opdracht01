<?php

require_once '../models/afspraakmodel.php';

class AfspraakController {
    public function index() {
        include '../index.php';
    }

    public function opslaanAfspraak() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $afspraakModel = new AfspraakModel();

            $afspraakModel->opslaanAfspraak($_POST);
        }
    }
}

$afspraakController = new AfspraakController();
