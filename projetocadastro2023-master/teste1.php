<!DOCTYPE html>
<html>
  
<head>
  <style type="text/css">
    body {
      margin: 30px;
    }
  </style>
</head>
  
<body>
  <form>
    1st Number : <input type="text" 
    id="firstNumber" /><br>
    2nd Number: <input type="text" 
    id="secondNumber" /><br>
    <input type="button" onClick="multiplyBy()" 
    Value="Multiply" /><br>
  </form>
  
  <p>The Result is : <br>
   <span id = "result"></span>
  </p>
  
  
  <script>
    function multiplyBy()
    {
      num1 = document.getElementById(
        "firstNumber").value;
      num2 = document.getElementById(
        "secondNumber").value;
      document.getElementById(
        "result").innerHTML = num1 * num2;
    }
  </script>
</body>
  
</html>










// Função para atualizar o campo de remuneração com base na função selecionada
function atualizarRemuneracao() {
    var funcaoSelecionada = document.getElementById("funcao").value;
    var remuneracaobrutaField = document.getElementById("remuneracaobruta");

    // Chama a função para calcular a remuneração com base na função selecionada
    var remuneracao = calcularRemuneracaoParaFuncao(funcaoSelecionada);

    // Define o valor calculado no campo "remuneracaobruta"
    remuneracaobrutaField.value = remuneracao;
}

// Função que calcula a remuneração com base na função selecionada
function calcularRemuneracaoParaFuncao(funcao) {
    // Aqui você pode definir uma estrutura de dados para mapear funções para remunerações
    // Por exemplo, um objeto ou um switch/case

    // Exemplo de objeto de mapeamento (substitua com valores reais)
    var mapeamentoRemuneracao = {
        "Supervisor": "905.68",
        "Auxiliar de Supervisão Geral de Aplicação": "905.68",
        "Supervisor e Auxiliar de Supervisão de Setor de Aplicação": "905.68",
        "Fiscal de Sala": "326.48",
        "Fiscal de Corredor": "326.48",
        "Apoio - Aplicação": "286.00",
        "Porteiro": "286.00",
        "Apoio - Bombeiro": "268.13",
        "Apoio - Eletricista": "268.13",
        "Apoio - Logística de Aplicação": "262.08",
        "Apoio - Logístico COPS": "592.00",
        "Motorista": "286.00",
        
        // Outras funções e remunerações
    };

    // Verifica se a função selecionada está no mapeamento
    if (mapeamentoRemuneracao.hasOwnProperty(funcao)) {
        return mapeamentoRemuneracao[funcao];
    } else {
        // Se a função não estiver no mapeamento, retorne um valor padrão
        return "Valor não encontrado";
    }
}
