<?php include '../../header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto'];
    $avaliacao = $_POST['avaliacao'];
    $comentarios = $_POST['comentarios'];

    echo "Feedback do produto: $produto<br>";
    echo "Avaliação: $avaliacao estrelas<br>";
    echo "Comentários: $comentarios<br>";
}
?>

<?php include '../../footer.php'; ?>
