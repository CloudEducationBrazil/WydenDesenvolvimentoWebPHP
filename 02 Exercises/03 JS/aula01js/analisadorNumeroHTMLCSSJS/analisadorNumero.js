let inputNum = document.querySelector('input#idInputNum');
let selectLista = document.querySelector('select#idListaNum');
let divResposta = document.querySelector('div#idResposta');

let lista = [];

function isNumeroValido(num) {
  let retorno = false;
  if (num >= 1 && num <= 120) {
    retorno = true;
  }
  return retorno;
}

function isNumero() {
  let retorno = false;
  if (inputNum.value.length == 0) {
    retorno = true;
  }
  return retorno;
}

function existeElementoLista(num) {
  let retorno = false;

  lista.sort();
  if (lista.indexOf(num) == -1) {
    retorno = true;
  }
  return retorno;
}

function addNumero() {
  // valida dados de entrada
  if (isNumero()) {
    alert('Número não informado!!!');
    inputNum.value = '';
    inputNum.focus();
    exit;
  }

  if (!isNumeroValido(inputNum.value)) {
    alert('Número fora da faixa!!!');
    inputNum.value = '';
    inputNum.focus();
    exit;
  }

  if (!existeElementoLista(inputNum.value)) {
    alert('Número já existe na lista!!!');
    inputNum.value = '';
    inputNum.focus();
    exit;
  }

  lista.push(Number(inputNum.value));
  var elemento = document.createElement('option');
  elemento.text = `Elemento ${inputNum.value} adicionado.`;
  selectLista.appendChild(elemento);

  inputNum.value = '';
  inputNum.focus();
}

function FimNumero() {
  if (lista.length == 0) {
    alert('Lista Vazia');
  }

  lista.sort((a, b) => parseInt(a) - parseInt(b));

  let maior = lista[lista.length - 1];
  let menor = lista[0];
  let soma = 0;

  for (let x in lista) {
    console.log(lista[x]);
    soma += lista[x];
  }

  divResposta.innerHTML = '';

  divResposta.innerHTML += `Menor número ${menor} <br>`;
  divResposta.innerHTML += `Maior número ${maior} <br>`;
  divResposta.innerHTML += `Total de elementos ${lista.length} <br>`;
  divResposta.innerHTML += `Somatório dos elementos ${soma} <br>`;
  divResposta.innerHTML += `Média ${soma / lista.length} <br>`;
}

/*
let s = '20,10.5,47.2,3';
let array = s.split(',');
array.sort((a, b) => parseFloat(a) - parseFloat(b));
console.log(array);
*/
