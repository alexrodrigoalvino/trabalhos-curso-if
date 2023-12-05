<script type="text/javascript">
//######################################################################################
// Inicio do gerador de contagem regressiva
// Este script é gratuito para uso desde que este aviso permaneça
// Este script foi encontrado e disponibilizado grtatuitamente em https://webzoneware.com
// Descrição: Este código exibe a quantidade de tempo até a data determinada (futura) inserida abaixo.

// NOTA: o mês digitado deve ser um a menos que o mês atual. ou seja; 0=janeiro, 11=dezembro
// NOTA: a hora está no formato de 24 horas. 0=12h, 15=15h etc.
// format: dateFuture1 = new Date(year,month-1,day,hour,min,sec)
// exemplo: dateFuture1 = new Date(2003,03,26,14,15,00) = April 26, 2003 - 2:15:00 pm

dateFuture1 = new Date(2023,9,6,13,00,00);

// TESTE: comente a linha abaixo para imprimir o "dateFuture" para fins de teste
//document.write(dateFuture +"<br />");

//###################################
//nada além deste ponto
function GetCount(ddate,iid){

dateNow = new Date();//grab current date
amount = ddate.getTime() - dateNow.getTime();//calc milliseconds between dates
delete dateNow;

// se o tempo já passou
if(amount < 0){
document.getElementById(iid).innerHTML="Now!";
}
// outra data
else{
days=0;out="";

amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

days=Math.floor(amount/86400);//days
amount=amount%86400;

if(days != 0){out += (days<=9?'0':'')+days +" "+((days==1)?"dia":"dias")+", ";}
out = out.substr(0,out.length-2);
document.getElementById(iid).innerHTML=out;

setTimeout(function(){GetCount(ddate,iid)}, 1000);
}
}

window.onload=function(){
GetCount(dateFuture1, 'countbox1');
//você pode adicionar contagens regressivas adicionais aqui (apenas certifique-se de criar dateFuture2 e countbox2 e assim por diante para contagem adicional)
};
</script>

<div id="countbox2" style="font:20pt Verdana; color:red; font-weight: bold; text-align: center;"></div>
