<?php include '../../header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'soma':
            $resultado = $num1 + $num2;
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacao':
            $resultado = $num1 * $num2;
            break;
        case 'divisao':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Erro: divisão por zero.";
            }
            break;
    }

    echo "Resultado: $resultado";
}
?>

<?php include '../../footer.php'; ?>
