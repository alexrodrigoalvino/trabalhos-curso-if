<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::COPS UFLA::</title>
    <!--conexão ao arquivo css-->
    <link href="css/styles.css" rel="stylesheet">
    <!--conexão ao arquivo de script js-->
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <header class="header">
        <p style="font-size: 12px;">:: COPS - Coordenadoria Geral de Processos Seletivos - UFLA ::</p>
    </header>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_pasta = $_POST["nome_pasta"];
    $diretorio_destino = "upload/" . $nome_pasta . "/"; // Substitua pelo caminho da pasta desejada

    if (!file_exists($diretorio_destino)) {
        mkdir($diretorio_destino, 0777, true); // Cria o diretório se ele não existir
    }

    $erros = [];

    for ($i = 1; $i <= 5; $i++) {
        $nome_arquivo = $_FILES["arquivo" . $i]["name"];
        if (!empty($nome_arquivo)) {
            $caminho_arquivo = $diretorio_destino . $nome_arquivo;
            if (move_uploaded_file($_FILES["arquivo" . $i]["tmp_name"], $caminho_arquivo)) {
                echo "Arquivo $i enviado com sucesso para: " . $caminho_arquivo . "<br>";
            } else {
                $erros[] = "Erro ao enviar o arquivo $i.";
            }
        }
    }

    if (!empty($erros)) {
        echo "Erros:<br>";
        foreach ($erros as $erro) {
            echo $erro . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Upload</title>
</head>
<body>
    <h1>Envie até 5 arquivos para uma pasta específica</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="nome_pasta">Nome da pasta:</label>
        <input type="text" name="nome_pasta" required><br><br>
        
        <label for="arquivo1">Arquivo 1:</label>
        <input type="file" name="arquivo1"><br><br>
        
        <label for="arquivo2">Arquivo 2:</label>
        <input type="file" name="arquivo2"><br><br>
        
        <label for="arquivo3">Arquivo 3:</label>
        <input type="file" name="arquivo3"><br><br>
        
        <label for="arquivo4">Arquivo 4:</label>
        <input type="file" name="arquivo4"><br><br>
        
        <label for="arquivo5">Arquivo 5:</label>
        <input type="file" name="arquivo5"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

