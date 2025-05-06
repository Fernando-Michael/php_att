<?php include '../../header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    echo "Você foi inscrito com sucesso na newsletter!<br>";
    echo "Email: $email<br>";
}
?>

<?php include '../../footer.php'; ?>
