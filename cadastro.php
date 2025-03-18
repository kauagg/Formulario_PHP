<?php

$host= "localhost:3307";
$username= "root";
$password= "";
$dbname= "teste";

$conn = new mysqli($host,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados". $conn->connect_error);}

   if($_SERVER['REQUEST_METHOD']== "POST"){
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $sexo=$_POST["sexo"];
    $telefone=$_POST["telefone"];
    $endereço=$_POST["endereço"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["estado"];
    $bairro=$_POST["bairro"];
    $pais=$_POST["pais"];
    $login=$_POST["login"];
    $senha=$_POST["senha"];
   }

   $stmt = $conn->prepare("INSERT TO (nome,email,sexo,telefone,endereco,cidade,estado,bairro,pais,login,senha)VALUES 
                            (?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param( "sssssssssss",  $nome,  $email, $sexo, $telefone, $endereco, $cidade, $estado, $bairro, $pais, $login, $senha);   

if($stmt->execute()){
    echo "<h1> Cadastro Realizado com Sucesso!";
}else{
    echo"Erro ao cadastrar".stmt->errno."". $stmt->error;
}

$stmt->close();

$conn->close();
?>