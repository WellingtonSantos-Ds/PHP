class Pessoa {
  constructor(nome, idade) {
    this.nome = nome;
    this.idade = idade;
    this.garagem = [];
  }

  addCar(marca, modelo) {
    this.garagem.push(new Carro(marca, modelo));
  }
}


class Carro {
  constructor(marca, modelo) {
    this.marca = marca;
    this.modelo = modelo;
  }
}

const novaPesso = new Pessoa("pablo", 12);

console.log(novaPessoa);
novaPessoa.addCar("ford", "mustang");
console.log(novaPessoa);

let carro = "Mustang";

const pessoaVelha = {
  pessoa: [
    {
      mome: "plablo",
      idade: 98,
    },
  ],

  carro: [
    {
      marca: "Forde",
      modelo: carro,
    },
  ],

  fn: () => console.log("viado"),
};

console.log(pessoaVelha);
pessoaVelha.fn();
