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

<center>

<fieldset>

    <legend>
    <img src="_imagens/logoufla.png" alt="Logo BD">
    <br>
    Cadastro de Colaboradores - Terceirizados
    </legend>
    <br>
<center>
    
    <px>
    Atenção colaborador!
    <br><br> 
    Para evitar atrasos no pagamento, é importante preencher todos os dados corretamente.
    </px>
    <br><br>

    <button class="botao4">
    <a href="index.php"
    style="text-decoration: none;">Menu Principal</a>
    </button>
    <br><br>

<fieldset class="custom-box2">
    <br>
    <form method="POST" action="confirmarcadastro.php">
                   
    <label for="funcao" class="labelInput">Por favor, indique a função desejada para a qual pretende trabalhar no processo:</label>
    <br><br>
    
    <select name="funcao" id="funcao" class="inputUserFuncao" required  onchange="atualizarRemuneracao()">
        
        <option value="Clique aqui para selecionar" SELECTED>--Clique aqui para selecionar--</option>
        
        <option value="Supervisor">Supervisor</option>
        
        <option value="Auxiliar de Supervisão Geral de Aplicação">Auxiliar de Supervisão Geral de Aplicação</option>
        <option value="Supervisor e Auxiliar de Supervisão de Setor de Aplicação">Supervisor e Auxiliar de Supervisão de Setor de Aplicação </option>
        <option value="Fiscal de Sala">Fiscal de Sala</option>
        <option value="Fiscal de Corredor">Fiscal de Corredor</option>
        <option value="Apoio - Aplicação">Apoio - Aplicação</option>
        <option value="Porteiro">Porteiro</option>
        <option value="Apoio - Bombeiro">Apoio - Bombeiro</option>
        <option value="Apoio - Eletricista">Apoio - Eletricista</option>
        <option value="Apoio - Logística de Aplicação">Apoio - Logística de Aplicação</option>
        <option value="Apoio - Logístico COPS">Apoio - Logístico COPS</option>
        <option value="Motorista">Motorista</option>
        
    </select>
        <br><br>

        <label for="etapa" class="labelInput">Selecione o dia que deseja trabalhar:</label>
        <br><br>

        <select name="etapa" id="etapa" class="etapa"  required onchange="atualizarRemuneracao()">

        <option value="Clique aqui para selecionar." SELECTED>--Clique aqui para selecionar--</option>
        <option value="Trabalhar no PAS - 1º DIA e 2º DIA" >Trabalhar no PAS - 1º DIA e 2º DIA</option>
        <option value="Trabalhar somente no PAS - 1º DIA" >Trabalhar somente no PAS - 1º DIA</option>
        <option value="Trabalhar somento no PAS - 2º DIA" >Trabalhar somento no PAS - 2º DIA</option>
        
    </select>
        <br><br>
           
        <label for="tremuneracao">Total da Remuneração (Bruta):</label>
        <br><br>

        <input type="text" id="tremuneracao" name="tremuneracao" class="inputUserValor"  required >  
        <br><br>

        <obs>* Obs.: Os valores ainda sofrerão desconto do INSS.</obs>
        <br><br>

        <label for="cidadeaplicacao" class="labelInput">Selecione a cidade de aplição da prova:</label>
        <br><br>

        <select name="cidadeaplicacao" id="cidadeaplicacao" class="cidadeaplicacao"  required >

        <option value="Clique aqui para selecionar." SELECTED>--Clique aqui para selecionar--</option>
        <option value="Lavras - MG" >Lavras - MG</option>
        <option value="São Sebastião do Paraíso - MG" >São Sebastião do Paraíso - MG</option>

</select>
<br><br>

</fieldset>

    <br>

<!--Início do código Dados Pessoais-->
<fieldset class="custom-box">
    <legend>
    <img src="_imagens/logobd1.png" alt="Logo BD">
    <br>

    Dados Pessoais
    </legend>
    <br>
        <div class="nome">
        <br>
    
        <LABEL for="nome">Nome:</LABEL>
        <br>
        <input type="text" id="nome" name="nome" class="inputUserNome" placeholder="Digite aqui seu nome completo" required>
        <br><br>
        
        <label for="sexo" class="labelInput">Sexo:</label>
        <br>

        <select name="sexo" id="sexo" class="sexo" required >
        <option value="Clique aqui para selecionar." SELECTED>Sexo</option>
        <option value="Masculino" >MASCULINO</option>
        <option value="Feminino" >FEMININO</option>
        <option value="Outros" >OUTROS</option>

        </select>
        <br><br>

        <label for="datadenascimento">Data de Nascimento:</label>
        <br>
        <input type="date" name="datadenascimento" id="datadenascimento" class="inputUserDate" placeholder="somente nÚmeros"  required>
        <br><br>

        <label for="id">CPF:</label>
        <br>
        <input type="text" id="id" name="id" class="inputUserCpf" maxLength="11" placeholder="Digite aqui o seu CPF - somente nÚmeros" required >
        <br><br>

        <label for="rg">RG:</label>
        <br>
        <input type="text" id="rg" name="rg" class="inputUserRg" maxLength="20" placeholder="Digite aqui o seu RG - somente nÚmeros" required>
        <br><br>

        <label for="pis">PIS:</label>
        <br>
        <input type="text" id="pis" name="pis" class="inputUserPis" maxLength="11" placeholder="Digite aqui o seu PIS - somente nÚmeros" required>
        <br><br>
        
        <LABEL for="nomesocialcasoutilize">Nome Social:</LABEL>
        <br>
        <input type="text" id="nomesocialcasoutilize" name="nomesocialcasoutilize" class="inputUserNomesocial" placeholder="Digite seu nome social (caso utilize)" >
        <br><br>

        <label for="telefone" class="labelInput">Telefone:</label>
        <br>
        <input type="tel" name="telefone" id="telefone" placeholder="DDD + número" class="inputUserTel" required>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
        $(document).ready(function(){
        $('#telefone').mask('(00) 0000-0000');
        });
        </script>
        <br><br>

        <label for="celular" class="labelInput">Celular:</label>
        <br>
        <input type="tel" name="celular" id="celular" placeholder="DDD + número" class="inputUserTel" required>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
        $(document).ready(function(){
        $('#celular').mask('(00) 00000-0000');
        });
        </script>
        <br><br>

        <LABEL for="email">E-mail:</LABEL>
        <br>
        <input type="text" id="email" name="email" class="inputUserEmail" placeholder="Digite seu e-mail corretamente" required>
        <br><br>       

        <label for="cep" class="labelInput">CEP:</label>
        <br>
        <input type="text" name="cep" id="cep" placeholder="somente números" class="inputUserCep" required maxLength="8" >

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
        $(document).ready(function(){
        $('#cep').mask('00.000-000');
        });
        </script>
        <br><br>

        <label for="endereco">Endereço:</label>
        <br>
        <input type="text" id="endereco" name="endereco" class="inputUserEnd" placeholder="Digite seu endereço corretamente" required>
        &ensp;

        <label for="numero">Nº:</label>
        <input type="text" id="numero" name="numero" class="inputUserNum"  required>
        <br><br>

        <label for="bairro">Bairro:</label>
        <br>
        <input type="text" id="bairro" name="bairro" class="inputUserBai" placeholder="Digite seu bairro corretamente"required>
        <br><br>

        <label for="cidade">Cidade:</label>
        <br>
        <input type="text" id="cidade" name="cidade" class="inputUserCid" placeholder="Digite o nome da sua cidade ex: Lavras/MG"required>
        <br><br>
    
</fieldset>

<!--Fim do código Dados Pessoais-->

    <br>

<!--Início do código Dados Bancário-->
<fieldset class="custom-box">

<legend>
    <img src="_imagens/pessoal.png" alt="Logo BD">
    <br>

    Dados Bancários
    </legend>
    <br>
    
    <div class="nome">
    <br>
    
<center>

        <LABEL for="nomedaagencia">Nome da Agência:</LABEL>
        <br>
        <input type="text" id="nomedaagencia" name="nomedaagencia" class="inputUserNomeAg" placeholder="Digite o nome do banco" required>
        <br><br>

        <LABEL for="codigodobanco">Código do Banco:</LABEL>
        <br>
        <input type="text" id="codigodobanco" name="codigodobanco" class="inputUserCodigob" placeholder="Digite o código do banco" required>
        <br><br>

        <LABEL for="agencia">Agência:</LABEL>
        <br>
        <input type="text" id="agencia" name="agencia" class="inputUserAg" placeholder="Digite o número da agência" required>
        <br><br>

        <LABEL for="numerodaconta">Número da Conta:</LABEL>
        <br>
        <input type="text" id="numerodaconta" name="numerodaconta" class="inputUserNumeroconta" placeholder="Digite o número da conta" required>
        <br><br>


<br><br>

    <center>
    <fieldset class="custom-listabanco">
        <texto>
    <center>
        <t style="font-size: 12px;color: blue;"; >Códigos dos principais bancos:</t>
    </center>
        <br>
        001 – Banco do Brasil S.A.<br>
        033 – Banco Santander (Brasil) S.A.<br>
        104 – Caixa Econômica Federal<br>
        237 – Banco Bradesco S.A.<br>
        341 – Banco Itaú S.A.<br>
        389 – Banco Mercantil do Brasil S.A. <br><br>
    <center>
        <<a href="upload.php" onclick="openPopup(); return false;" style="font-size: 14px; color: blue;">ANEXAR DOCUMENTAÇÃO</a>

<script>
function openPopup() {
    // Define o tamanho e posição da nova janela
    var largura = 800; // Largura em pixels
    var altura = 600;  // Altura em pixels
    var left = (screen.width - largura) / 2;
    var top = (screen.height - altura) / 2;

    // Abre a nova janela com as configurações especificadas
    window.open('upload.php', 'popup', 'width=' + largura + ', height=' + altura + ', left=' + left + ', top=' + top);

    return false;
}
</script>

    </texto>
    </center>
    </fieldset>       
 
    <br>

</fieldset>
<!--Fim do código Dados Bancário-->

    <br>

<!--Início do código upload-->
<center>
<fieldset class="custom-upload">

<legend>
    <img src="_imagens/upload.png" alt="Logo BD">
    <br>

    Anexar Documentos
    </legend>
    <br>
<center>
    <div class="nome">
    <br>

    <a href="upload.php" onclick="openPopup(); return false;" style="font-size: 14px; color: blue;">ANEXAR DOCUMENTAÇÃO</a>

    <br><br>

    <label for="datacadastro">Data do Cadastro:</label>
<br>
<input type="text" id="datacadastro" name="datacadastro" class="inputUserNumeroconta" readonly>
<br><br>


 </fieldset> 

</center> 
<!--Fim do código upload-->

    <br>

<!--Início do código botão finalizar cadastro-->
<fieldset class="custom-botaofinalizar">
    <br><br>
<center>
    <input type="submit" style="font-size: 14px;color: blue; font-weight: bold;" value="Fizalizar Cadastro">
    <br><br>
</center>
</fieldset>
<!--Fim do código botão finalizar cadastro-->      

</form>
</div>

    <br><br>

</fieldset>
</center>

<!--Início código UPLOAND-->   








</body>
</html>

