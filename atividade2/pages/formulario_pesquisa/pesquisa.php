<?php include '../../header.php'; ?>

<?php
if (isset($_GET['termo'])) {
    $termo = $_GET['termo'];
    echo "Você pesquisou por: $termo";
}
?>

<?php include '../../footer.php'; ?>
