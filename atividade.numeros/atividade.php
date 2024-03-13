<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>atividade</title>
</head>
<body>

    <h1>FORMULARIO</h1>
    <form method="post">
    <label for="nmr">digitar numero:</label<br>
    <input type="number" id="nmr" name="nmr" required>
    <button type="submit">teste</button>
    <form>  

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["nmr"];

        if ($numero % 2 == 0) {
            echo "<p>o numero $numero é PAR.</p>";
        } else{
            echo "<p>o numero $numero é IMPAR.</p>";
        }
    }

        if (is_numeric($numero)) {
            // Verifica se o número é redondo
            if ($numero % 10 == 0) {
                echo "<p>O número $numero é redondo.</p>";
            } else {
                echo "<p>O número $numero não é redondo.</p>";
            }
        } 

        if ($numero > 0) {
            echo "<p>O número $numero é positivo.</p>";
            
            } elseif($numero < 0) {
                echo "<p>O número $numero  é negativo.</p>";
            }else{
                echo "<p>O número $numero  é neutro(zero).</p>";
            }
        
    ?>
</body>
</html>