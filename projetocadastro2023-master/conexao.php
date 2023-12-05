<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>

<?php
include_once('conexao.php');

// Substitua esses valores pelo caminho e credenciais reais do banco de dados
$databasePath = 'bdx.mdb';
$username = 'bdx.mdb'; // Leave empty for MDB databases
$password = '123'; // Leave empty for MDB databases


try {
    // Estabeleça a conexão usando PDO
    $pdo = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=$databasePath", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar e executar a consulta
    $query = "SELECT * FROM cadastro1";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

    }
?>


