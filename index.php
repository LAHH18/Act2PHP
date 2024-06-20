<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        .container{
            max-width: 400px;
            border: black 2px solid;
        }
        label,
        p{
            font-size: 15px;
            font-weight: bold;
        }
    </style>
    <title>Conversor de numeros</title>
</head>
<body>
    <div class="container text-center bg-dark text-white mt-5"><!--Apartado para el titulo-->
    <h1>Conversor de numeros</h1>
    </div>
    <form class="container p-4 mb-5" method="post"> <!--Formulario-->
        <label>Ingrese el número:</label>
        <input type="number" class="form-control" id="numero" name="numero" required><br>
        <label>Menú</label>
        <select id="opcion" name="opcion" class="form-select" aria-label="Default select example" required>
            <option disabled selected>Opciones</option>
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        <br>
        <div class="text-center"> <!--Apartado para boton-->
            <input type="submit" value="Convertir" class="btn btn-primary">            
        </div>
    </form>

    <?php
    #Verifica si el formulario fue mandado por post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['numero'];
        $opc = $_POST['opcion'];
        $res = "";

        switch($opc) {
            case "binario":
                $res = decbin($num);
                break;
            case "octal":
                $res = decoct($num);
                break;
            case "hexadecimal":
                $res = dechex($num);
                break;
            default:
                $res = "Error";
                break;
        }

        echo "<div class='container text-center bg-dark text-white mt-5'>";
        echo "<h2>Resultado:</h2>";
        echo "</div>";
        echo "<div class='container text-center'>";
        echo "<p>La conversion de $num en $opc es: $res</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
