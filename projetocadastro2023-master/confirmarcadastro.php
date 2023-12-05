<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::COPS UFLA::</title>
    <link href="css/styles.css" rel="stylesheet">
</head>

<?php
include_once('conexao.php'); // Inclua o arquivo de conexão aqui

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpf = $_POST['id'];

    // Consulta SQL para verificar se o CPF já existe
    $verificaQuery = "SELECT COUNT(*) FROM cadastro1 WHERE id = :id";
    $verificaStmt = $pdo->prepare($verificaQuery);
    $verificaStmt->bindParam(':id', $id);
    $verificaStmt->execute();
    $count = $verificaStmt->fetchColumn();

    if ($count > 0) {

        echo '<header class="header"> <p style="font-size: 12px;">:: COPS - Coordenadoria Geral de Processos Seletivos - UFLA ::</p>
        </header>';
        echo "CPF já cadastrado. Não é permitido cadastrar o mesmo CPF novamente.";
        echo "<br><br><br>"; // Adicione uma linha em branco
        
        echo  '<button onclick="history.go(-1);">Voltar para o Cadastro</button>';
    } else {

        // Primeiro grupo
        $funcao = $_POST['funcao'];
        $etapa = $_POST['etapa'];
        $tremuneracao = $_POST['tremuneracao'];

        // Segundo grupo dados pessoais
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $datadenascimento = $_POST['datadenascimento'];
        $id = $_POST['id'];
        $rg = $_POST['rg'];
        $pis = $_POST['pis'];
        $nomesocialcasoutilize = $_POST['nomesocialcasoutilize'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];

        // Terceiro grupo dados bancários
        $nomedaagencia = $_POST['nomedaagencia'];
        $agencia = $_POST['agencia'];
        $numerodaconta = $_POST['numerodaconta'];
        $codigodobanco = $_POST['codigodobanco'];
        $datacadastro = $_POST['datacadastro'];

        try {
            // Preparar e executar a consulta de inserção
            $query = "INSERT INTO cadastro1 (funcao, etapa, tremuneracao, nome, sexo, datadenascimento, id, rg, pis, nomesocialcasoutilize, telefone, email, celular, cep, endereco, numero, bairro, cidade, nomedaagencia, agencia, numerodaconta, codigodobanco, datacadastro) VALUES (:funcao, :etapa, :tremuneracao, :nome, :sexo, :datadenascimento, :id, :rg, :pis, :nomesocialcasoutilize, :telefone, :email, :celular, :cep, :endereco, :numero, :bairro, :cidade, :nomedaagencia, :agencia, :numerodaconta, :codigodobanco, :datacadastro)";
            $stmt = $pdo->prepare($query);

            // Primeiro grupo
            $stmt->bindParam(':funcao', $funcao);
            $stmt->bindParam(':etapa', $etapa);
            $stmt->bindParam(':tremuneracao', $tremuneracao);

            // Segundo grupo dados pessoais
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sexo', $sexo);
            $stmt->bindParam(':datadenascimento', $datadenascimento);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':pis', $pis);
            $stmt->bindParam(':nomesocialcasoutilize', $nomesocialcasoutilize);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':celular', $celular);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':numero', $numero);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);

            // Terceiro grupo dados bancários
            $stmt->bindParam(':nomedaagencia', $nomedaagencia);
            $stmt->bindParam(':agencia', $agencia);
            $stmt->bindParam(':numerodaconta', $numerodaconta);
            $stmt->bindParam(':codigodobanco', $codigodobanco);
            $stmt->bindParam(':datacadastro', $datacadastro);

            if ($stmt->execute()) {

                echo '<header class="header"> <p style="font-size: 12px;">:: COPS - Coordenadoria Geral de Processos Seletivos - UFLA ::</p>
                </header>';
                echo "SEU CADASTRO FOI CONFIRMADO.";
                echo "<br><br><br>"; // Adicione uma linha em branco
                
                                echo '<button class="botao-customizado">
                <a href="http://serverdipsad.ufla.br/asp/cadastrocolaboradorespas2023/index.php"
                style="text-decoration: none;">Voltar > Menu Principal</a></button>';
          
               
              
            } else {
                echo "Erro ao cadastrar dados.";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>
