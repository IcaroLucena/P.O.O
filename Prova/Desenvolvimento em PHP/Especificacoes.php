<?php
class Especificacoes {
    protected $nome;
    public $ano;

    public function __construct($nome, $ano) {
        $this->nome = $nome;
        $this->ano = $ano;
    }

    public function falar() {
        return "falando";
    }

    public function trocarNome($novoNome) {
        if ($this->ano < 2000) {
            $this->nome = $novoNome;
            return "Nome trocado para $novoNome";
        } else {
            return "Não pode trocar o nome. Ano superior a 2000.";
        }
    }

    public function getNome() {
        return $this->nome;
    }
}
?>