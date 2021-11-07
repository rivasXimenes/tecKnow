<?php 

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$hashSenha = trim(password_hash($_POST['senha'],PASSWORD_DEFAULT));

$sql = "INSERT INTO cadastro(nome, sobrenome, email, hashSenha) VALUES ('$nome','$sobrenome', '$email', '$hashSenha')";


include 'conecta.php';


mysqli_query($conn,$sql);
?>