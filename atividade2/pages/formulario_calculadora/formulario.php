<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
<form action="calculadora.php" method="POST">
    <label for="num1">Número 1:</label><br>
    <input type="number" id="num1" name="num1"><br><br>

    <label for="num2">Número 2:</label><br>
    <input type="number" id="num2" name="num2"><br><br>

    <label for="operacao">Operação:</label><br>
    <select id="operacao" name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br><br>
    
    <input type="submit" value="Calcular">
</form>



</body>
</html>
