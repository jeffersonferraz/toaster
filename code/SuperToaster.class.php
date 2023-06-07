<?php
include_once "Toaster.class.php";

class SuperToaster extends Toaster {

    public $temperatur;

    public function __construct($zeit) {
        $this->temperatur = ($zeit * 10);
    }

    public function tempErmitteln() {

        if ($this->temperatur >= 500) {
            echo "<section><strong>Fehler:</strong> Maximale Temperatur von 500°C wurde erreicht!</section>";
        }

    }

}