<?php

require_once "model/mahasiswa.php";

class MahasiswaController {
    public function index() {
        $model = new Mahasiswa();
        $data = $model->getData();

        require "view/mahasiswa_view.php";
    }
}
