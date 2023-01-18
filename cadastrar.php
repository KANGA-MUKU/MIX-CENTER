<?php
require_once('conexao.php');

$Nome=$_POST['Nome'];
$contacto=$_POST['contacto'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql_cadastro= mysqli_query($ligar, " INSERT INTO Candidatura (Nome, contacto, email, senha) VALUES ('$Nome', '$contacto', '$email', '$senha')");

if ($sql_cadastro ==true){
       echo" <script> 
       
       alert('Aluno cadastrado com sucesso');
       window.location.href='login.html';
       
       </script>";
} else{
    echo" <script> 
       
    alert(' Falha no cadastro');
    window.location.href='cadastrar.html';
    
    </script>";
}
?>