

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
function atualizarRemuneracao() {
    var funcaoSelecionada = document.getElementById("funcao").value;
    var etapaSelecionada = document.getElementById("etapa").value;
    var remuneracaobrutaField = document.getElementById("remuneracaobruta");
    var tremuneracaoField = document.getElementById("tremuneracao");

    // Chama a função para calcular a remuneração com base na função selecionada
    var remuneracao = parseFloat(calcularRemuneracaoParaFuncao(funcaoSelecionada));

    // Define o fator multiplicador com base na etapa selecionada
    var fatorEtapa = 1; // Valor padrão se a etapa não for reconhecida

    if (etapaSelecionada === "Trabalhar no PAS - 1º DIA e 2º DIA") {
        fatorEtapa = 2; // Multiplicador para essa etapa
    } else if (etapaSelecionada === "Trabalhar somente no PAS - 1º DIA") {
        fatorEtapa = 1; // Multiplicador para essa etapa
    } else if (etapaSelecionada === "Trabalhar somente no PAS - 2º DIA") {
        fatorEtapa = 1; // Multiplicador para essa etapa
    }

    // Calcula a remuneração total (bruta * fatorEtapa) apenas no campo tremuneracao
    var totalRemuneracaoBruta = remuneracao.toFixed(2); // Duas casas decimais

    // Define o valor calculado apenas no campo "tremuneracao"
    tremuneracaoField.value = (totalRemuneracaoBruta * fatorEtapa).toFixed(2); // Duas casas decimais
}



// Função para obter a data e hora atual no formato "dd/mm/yyyy hh:mm:ss"
function obterDataHoraAtual() {
    var dataAtual = new Date();
    var dia = String(dataAtual.getDate()).padStart(2, '0');
    var mes = String(dataAtual.getMonth() + 1).padStart(2, '0');
    var ano = dataAtual.getFullYear();
    var horas = String(dataAtual.getHours()).padStart(2, '0');
    var minutos = String(dataAtual.getMinutes()).padStart(2, '0');
    var segundos = String(dataAtual.getSeconds()).padStart(2, '0');
    
    return dia + '/' + mes + '/' + ano + ' ' + horas + ':' + minutos + ':' + segundos;
}

// Adicionar a data e hora atual ao campo "datacadastro" quando o formulário for enviado
document.addEventListener('DOMContentLoaded', function () {
    var datacadastroField = document.getElementById('datacadastro');
    
    // Adicionar um ouvinte de evento para quando o formulário for enviado
    document.querySelector('form').addEventListener('submit', function () {
        datacadastroField.value = obterDataHoraAtual();
    });
});



