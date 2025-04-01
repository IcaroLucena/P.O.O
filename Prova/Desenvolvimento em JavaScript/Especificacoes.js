export class Especificacoes {
    constructor(nome, ano) {
        this.nome = nome;
        this.ano = ano;
    }

    falar() {
        return "falando";
    }

    trocarNome(novoNome) {
        if (this.ano < 2000) {
            this.nome = novoNome;
            return `Nome trocado para ${novoNome}`;
        } else {
            return "Não pode trocar o nome. Ano superior a 2000.";
        }
    }

    getNome() {
        return this.nome;
    }
}
