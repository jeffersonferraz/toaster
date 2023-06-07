<?php
include_once "Toaster.class.php";

class SuperToaster extends Toaster {

    public function tempErmitteln($temperatur) {

        if ($temperatur > 500) {
            echo "500°C ist die maximale Temperatur!";

        }

    }

}