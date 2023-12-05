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

<fieldset>

    <legend>
    <img src="_imagens/logo.png" alt="Logo BD">
    <br>
    Cadastro de Colaboradores - Terceirizados
    </legend>
    <br>

    <?php
    
    include_once('conexao.php');

    // Verifique se um parâmetro 'id' foi passado na URL
    if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    // Preparar e executar a consulta para buscar um usuário específico pelo ID
    $query = "SELECT * FROM cadastro1 WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $idUsuario, PDO::PARAM_INT);
    $stmt->execute();
  
    // Verifique se o usuário foi encontrado
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Acessar os dados do usuário
            
        echo 
        
        "<center>Login de Acesso: " . $row['id'] . "</center><br><br>
          
        <fieldset>
        <br>
        <center>
            Por favor, indique a função desejada para a qual pretende trabalhar no processo: <br><br>" . $row['funcao'] . "<br><br>

            Remuneração Bruta (por aplicação): R$ " . $row['remuneracaobruta'] . "<br><br>
            
            Selecione o dia que deseja trabalhar: " . $row['etapa'] . "<br><br>
            
            Total da Remuneração (Bruta): R$ " . $row['tremuneracao'] . "<br><br>
        
        </fieldset>
        <br> 

        <fieldset>
        <br>
        <center>
            Nome: " . $row['nome'] . "<br><br>
            Sexo: " . $row['sexo'] . "&ensp;
            Data de Nascimento: " . $row['datadenascimento'] . "<br><br>
            CPF: " . $row['id'] . "&ensp;
            RG: " . $row['rg'] . "&ensp;
            PIS: " . $row['pis'] . "<br><br>
            Nome Social: " . $row['nomesocialcasoutilze'] . "<br><br>
            Telefone: " . $row['telefone'] . "&ensp;
            Celular: " . $row['celular'] . "<br><br>
            E-mail: " . $row['email'] . "<br><br>
            CEP: " . $row['cep'] . "&ensp;
            Cidade: " . $row['cidade'] . "<br><br>
            Endereço: " . $row['endereco'] . ",&ensp;
             " . $row['numero'] . "<br><br>
            Bairro: " . $row['bairro'] . "<br><br>
                      
        </fieldset>
        <br>

        <fieldset>
        <br>
        <center>

        Nome da Agência: " . $row['nomedaagencia'] . "<br><br>
        Código do Banco: " . $row['codigodobanco'] . "<br><br>
        Agência: " . $row['agencia'] . "&ensp;
        Número da Conta: " . $row['numerodaconta'] . "<br><br>

        </fieldset>

        
        <br><br>
        <a href='editar.php?id=" . $row['id'] . "'><center>Editar</a><br><br>";
        

    } else {
        echo "<center>Usuário não encontrado. ";
        echo "<br><br>"; // Adicione uma linha em branco
        echo "Dúvidas e informação: alex.pedroso@ufla.br";
        echo "<br><br><br>"; // Adicione uma linha em branco
        echo "Você pode clicar em VOLTAR e tentar novamente.";
        echo "<br><br><br>"; // Adicione uma linha em branco
        echo  '<button onclick="history.go(-1);">Voltar</button>';
       
    }
    } else {
    echo "Nenhum ID de usuário fornecido.";
    }
    ?>
   

</fieldset>

</body>
</html>