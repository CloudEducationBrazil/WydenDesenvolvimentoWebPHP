const carro = {
  ano: 2001,
  marca: 'volkswagem',
  modelo: 'gol',
  buzina: function () {
    alert('Bibi');
  },
  info: function () {
    return 'Marca:' + this.marca + ' - Modelo' + this.modelo;
  },
};

console.log(carro);
console.log(carro.info());

const lista = new Array('maria', 'julia', 'josy', 78, 67.89);
lista.splice(1, 0, 'amora', 'rita', 'carlos');
lista.push('amor');
console.log(lista);

const lista4 = lista.sort();
console.log(lista4);

const lista8 = [30, 50, 22, 11, 44, 27];

let maior = MaiorNum(lista8);

function MaiorNum(array) {
  return Math.max.apply(null, array);
}

console.log(maior);

const maior30 = lista8.filter(filtrarNum);
function filtrarNum(value) {
  return value > 30;
}

delete maior30[1];
console.log(maior30);
