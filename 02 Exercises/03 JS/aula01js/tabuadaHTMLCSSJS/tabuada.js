let inputNum = document.getElementById('idNum');
let select = document.getElementById('tabNum');

function isNumeroValido(num) {
  let retorno = false;
  if (num >= 1 && num <= 200) {
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

function addTabuada() {
  select.innerHTML = '';

  if (isNumero()) {
    alert('Número não informado!!!');
    exit;
  }

  if (!isNumeroValido(Number(inputNum.value))) {
    alert('Número Fora da Faixa!!!');
    exit;
  }

  let n = Number(inputNum.value);
  for (let x = 0; x <= 10; x++) {
    let element = document.createElement('option');
    element.text = `${n} x ${x} = ${n * x}`;
    inputNum.value = `value=${x}`;
    element.value = select.appendChild(element);
  }
}
