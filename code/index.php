<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Toaster</title>
</head>
<body>

    <div class="container">

        <h1>Toaster</h1>

        <form action="" method="post">

            <input name="anzahl_toasts" type="number" placeholder="Toasts"> <br>

            <input name="zeit" type="number" placeholder="Zeit"> <br>

            <button name="toasten_button" type="submit">Toasten</button> <br>

            <div class="output">
            <?php
                include_once "Toaster.class.php";

                if (isset($_POST["toasten_button"])) {

                    if ($_POST["anzahl_toasts"] < 0 || $_POST["zeit"] < 0) {

                        echo "<section>Toasts einwerfen und Zeit eingeben.</section>";

                    } else {

                        $toast = new Toaster($_POST["anzahl_toasts"], $_POST["zeit"]);
                        
                        $toast->toastReintun();

                        $toast->toastAuswerfen();

                    }

                }
            ?>
            </div>
        </form>

    </div>

    
</body>
</html>