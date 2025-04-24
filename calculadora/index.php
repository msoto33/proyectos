<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Básica en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f5f5f5;
        }
        .calculadora {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 320px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, select, button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
        }
        .resultado {
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

<div class="calculadora">
    <h2>Calculadora Básica</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Número 1" step="any" required>
        <input type="number" name="num2" placeholder="Número 2" step="any" required>
        <select name="operacion" required>
            <option value="">Seleccione operación</option>
            <option value="suma">Sumar (+)</option>
            <option value="resta">Restar (-)</option>
            <option value="multiplicacion">Multiplicar (*)</option>
            <option value="division">Dividir (/)</option>
        </select>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operacion = $_POST['operacion'];
        $resultado = "";

        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: División por cero";
                }
                break;
            default:
                $resultado = "Operación no válida";
        }

        echo "<div class='resultado'>Resultado: <strong>$resultado</strong></div>";
    }
    ?>
</div>

</body>
</html>
