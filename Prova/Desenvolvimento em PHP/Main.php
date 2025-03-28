<?php
session_start();
require_once 'Concessionaria.php';
require_once 'Veiculo.php';

if (!isset($_SESSION['concessionaria'])) {
    $_SESSION['concessionaria'] = serialize(new Concessionaria("Toyota", 1926));
    $_SESSION['veiculo'] = serialize(new Veiculo("Etios", 2021));
}

$concessionaria = unserialize($_SESSION['concessionaria']);
$veiculo = unserialize($_SESSION['veiculo']);

$mensagem = "";

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    switch ($acao) {
        case "concessionariaFala":
            $mensagem = "Concessionaria: " . $concessionaria->falar();
            break;
        case "veiculoFala":
            $mensagem = "Veiculo: " . $veiculo->falar();
            break;

        case "trocarNomeConcessionaria":
            $mensagem = $concessionaria->trocarNome("Toyota LTDA");
            break;
        case "trocarNomeVeiculo":
            $mensagem = $veiculo->trocarNome("Etios 2.0");
            break;
    }

    // Atualiza objetos na sessão
    $_SESSION['concessionaria'] = serialize($concessionaria);
    $_SESSION['veiculo'] = serialize($veiculo);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prova</title>

<style>
    
    body {
        font-family: Arial, sans-serif;
        background: #f8f8f8;
        padding: 20px;
    }
    button {
        margin: 10px;
        padding: 10px 20px;
        border: none;
        background: #007BFF;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }
    #resultado {
        margin-top: 20px;
        background: #fff;
        padding: 15px;
        border-radius: 5px;
        min-height: 100px;
    }

</style>

</head>
<body>
    
    <h2>Toyota</h2>

    <form method="post">

        <button name="acao" value="concessionariaFala">Concessionaria fala</button>
        <button name="acao" value="veiculoFala">Veiculo fala</button>

        <button name="acao" value="trocarNomeConcessionaria"> Trocar nome da Concessionaria</button>
        <button name="acao" value="trocarNomeVeiculo"> Trocar nome do Veiculo</button>

    </form>

    <div id="resultado">

        <?php
        if (!empty($mensagem)) {
            echo "<p>$mensagem</p>";
        }
        ?>

    </div>

</body>
</html>