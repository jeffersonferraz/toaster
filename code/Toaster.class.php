<?php

class Toaster {

    public $farbe;
    public $schaechte;
    public $anzahlToasts;
    public $toastZustand;
    public $zeit;

    public function __construct($farbe, $schaechte, $anzahlToasts, $zeit) {

        $this->farbe = $farbe;
        $this->schaechte = $schaechte;
        $this->anzahlToasts = $anzahlToasts;
        $this->zeit = $zeit;
        
    }

    public function toastReintun() {

        if ($this->anzahlToasts <= $this->schaechte) {

            echo "Passt!";

        } else {

            echo "Passt nicht!";

        }

    }

    public function toasten() {

        if ($this->zeit > 0) {

            $this->toastZeiteinstellen();

        } else {

            echo "Kein Toast!";

        }

    }

    public function toastZeiteinstellen() {

        if ($this->zeit > 0 && $this->zeit <= 15) {

            $this->toastZustand = "leicht getoastet!";

        } elseif ($this->zeit > 15 && $this->zeit <= 30) {

            $this->toastZustand = "stark getoastet!";

        } elseif ($this->zeit > 30) {

            $this->toastZustand = "verbrannt!";

        } else {

            $this->toastZustand = "ungetoastet!";

        }

    }

    public function toastAuswerfen() {

       echo "Der Toast ist {$this->toastZustand}";

    }

}