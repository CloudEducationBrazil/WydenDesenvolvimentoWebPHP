let num = 3;

function fatorial(n) {
  if (n === 1 || n === 0) {
    return 1;
  } else {
    return n * fatorial(n - 1);
  }
}

console.log(fatorial(num));
