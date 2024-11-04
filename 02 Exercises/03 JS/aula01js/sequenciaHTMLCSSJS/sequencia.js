function addSequencia() {
  let inputVlInicial = document.getElementById('inputVlInicial');
  let inputVlFinal = document.getElementById('inputVlFinal');
  let inputPasso = document.getElementById('inputPasso');
  let divResposta = document.getElementById('idResposta');

  // valida dados de entrada
  if (inputVlInicial.value.length == 0) {
    alert('Valor inicial não informado!!!');
    exit;
  }

  if (inputVlFinal.value.length == 0) {
    alert('Valor final não informado!!!');
    exit;
  }

  if (Number(inputPasso.value) <= 0) {
    alert('Passo negativo: Definindo passo 1...');
    inputPasso.value = '1';
  }

  divResposta.innerHTML += `<br>`; // \u{1F449} \u{1F3c1}

  // https://unicode.org/emoji/charts/full-emoji-list.html
  if (Number(inputVlInicial.value) < Number(inputVlFinal.value)) {
    // Contagem Crescente
    for (
      let x = Number(inputVlInicial.value);
      x <= Number(inputVlFinal.value);
      x = x + Number(inputPasso.value)
    ) {
      divResposta.innerHTML += `${x} \u{1F609} `; // \u{1F449} \u{1F3c1}
    }
  } else {
    // Contagem Decrescente
    for (
      let x = Number(inputVlInicial.value);
      x >= Number(inputVlFinal.value);
      x = x - Number(inputPasso.value)
    ) {
      divResposta.innerHTML += `${x} \u{1F609} `;
    }
  }
  divResposta.innerHTML += `\u{1F3c1}`;
}
