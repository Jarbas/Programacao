//declarando variaveis

var inteiro = 3;
alert(inteiro);
var pontoFlutuante = 3.99;
alert(pontoFlutuante);
var semtipo;
alert(semtipo);
var nome = "Jarbas";
alert(nome);

// exemplo de array

var cidades = [];
cidades[0] = "Chapeco";
cidades[1] = "Xaxim";
cidades[20] = "Concordia";
alert(cidades[0]);

//impriminto vetor
alert(cidades);

alert(cidades.length);

// vetor associativo

var pessoas = [];

pessoas["0044"] = "Jarbas";
pessoas["0342"] = "Dull";
pessoas["0054"] = "Mariah";
pessoas["0054"] = "Esther";
alert(pessoas["0044"]);

//typeofa exibe o tipo de variavel

alert("tipo variavel: " + typeof pessoas);


//exemplo de if 
if (cidades[0] == "Chapeco") 
 {
   alert("if funcionou");
 }
else {
    alert("Não funcionou");
};

//para comparacao de valor e tipo exemplo : a === b

//para incrimento a++ c = a++ onde a = 1 , c receberá 1, na sintexe c = ++a , c recebera 2


//exibe caixa de alerta
alert("Mensagem exibida com sucesso");

//imprime a mensagem na pagina html

document.write("<h1> Mensagem 2 </h1>");

