<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Live Server (não) http://127.0.0.1:5500/somar.html -->
    <!-- vsCode Server PHP http://localhost:3000/somar.html run PHP server: Serve project-->
    <!-- rodar no browser http://127.0.0.1/projphp/somar.php-->
    <form method="GET" action="./somarRes.php">
        <fieldset>
            <label>Número1: </label><input type="text" name="x">
        </fieldset>

        <fieldset>
            <label>Número2: </label><input type="text" name="y">
        </fieldset>

        <br>
        <!--<input type="submit" value = "Somar"/>-->
        <button>Somar</button>

    </form>
</body>
</html>