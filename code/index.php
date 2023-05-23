<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toaster</title>
</head>
<body>

    <div class="container">

        <h1>Toaster</h1>

        <form action="" method="post">

            <label for="anzahl_toasts">Anzahl der Toasts: </label>
            <input name="anzahl_toasts" type="number">

            <label for="zeit">Zeit: </label>
            <input name="zeit" type="number">

            <button name="button" type="submit">Toasten</button>

        </form>

    </div>

    <?php
    include_once "Toaster.class.php";

    if (isset($_POST["button"])) {

        if ($_POST["anzahl_toasts"] < 0 || $_POST["zeit"] < 0) {

            echo "Toasts einwerfen und Zeit eingeben.";

        } else {

            $toast = new Toaster($_POST["anzahl_toasts"], $_POST["zeit"]);

            $toast->toastReintun();

            $toast->toastAuswerfen();

        }

    }
    ?>
</body>
</html>