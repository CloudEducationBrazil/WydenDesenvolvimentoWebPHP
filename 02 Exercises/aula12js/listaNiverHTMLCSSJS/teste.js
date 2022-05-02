let div = document.getElementById('idDiv');

let h1 = document.createElement('h1');
h1.innerHTML = 'Acertei Criação de Texto';
h1.setAttribute('id', 'idH11');
h1.style.color = 'green';
div.appendChild(h1);
div.removeChild(h1);
