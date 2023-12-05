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
