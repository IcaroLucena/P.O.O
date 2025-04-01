import { Concessionaria } from "./Concessionaria.js";
import { Veiculo } from "./Veiculo.js";

// Instancia os objetos
const concessionaria = new Concessionaria("Toyota", 1926);
const veiculo = new Veiculo("Etios", 2021);

document.getElementById("concessionariaFala").addEventListener("click", () => {
    atualizarResultado(`Concessionária: ${concessionaria.falar()}`);
});

document.getElementById("veiculoFala").addEventListener("click", () => {
    atualizarResultado(`Veículo: ${veiculo.falar()}`);
});

document.getElementById("trocarNomeConcessionaria").addEventListener("click", () => {
    atualizarResultado(concessionaria.trocarNome("Toyota LTDA"));
});

document.getElementById("trocarNomeVeiculo").addEventListener("click", () => {
    atualizarResultado(veiculo.trocarNome("Etios 2.0"));
});

function atualizarResultado(mensagem) {
    const resultado = document.getElementById("resultado");
    resultado.innerHTML = `<p>${mensagem}</p>`;
}
