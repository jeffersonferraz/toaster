<?php

class Toaster {

    public $farbe;
    public $schaechte = 2;
    public $anzahlToasts;
    public $toastZustand;
    public $zeit;

    public function __construct($anzahlToasts, $zeit) {

        // $this->farbe = $farbe;
        // $this->schaechte = $schaechte;
        $this->anzahlToasts = $anzahlToasts;
        $this->zeit = $zeit;
        
    }

    public function toastReintun() {

        if ($this->anzahlToasts <= $this->schaechte) {

            $this->toasten();

        } else {

            echo "Passt nicht!";

        }

    }

    public function toasten() {

        if ($this->anzahlToasts > 0) {

            if (!empty($this->zeit)) {

                for($i = 1; $i <= 50; $i++){
                
                    echo "<strong>|</strong>";
                
                    // Send output to browser immediately
                    flush();
                    
                    // Sleep one second so we can see the delay
                    usleep($this->zeit * 1000);
                }

                echo "<br>";

            }

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

        if (!empty($this->toastZustand)) {

            echo "Der Toast ist {$this->toastZustand}";
            
        }

    }

}