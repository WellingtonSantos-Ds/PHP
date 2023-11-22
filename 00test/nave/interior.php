<?php
session_start();

// Inicializa o array de naves e tripulações se ainda não existir
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [];
}

// Adiciona nave e tripulação se o formulário for enviado
$nome = filter_input(INPUT_GET, 'nave');
$trip = filter_input(INPUT_GET, 'trip');

if ($nome && $trip) {
    $_SESSION['array'][] = ['Nave' => $nome, 'Tripulação' => $trip];
}

// Remove uma nave específica se o parâmetro 'excluir_nave' estiver presente na URL
if (isset($_GET['excluir_nave'])) {
    $naveExcluir = $_GET['excluir_nave'];

    // Percorre o array para encontrar o índice do elemento a ser removido
    foreach ($_SESSION['array'] as $key => $item) {
        if ($item['Nave'] === $naveExcluir) {
            unset($_SESSION['array'][$key]);
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>VIAGEM AO ESPAÇO</title>
</head>
<body>

<h1>VIAGEM AO ESPAÇO</h1>


<table border="">
    <?php foreach ($_SESSION['array'] as $chave): ?>
        <?php foreach ($chave as $valor => $nome): ?>

            <tr>
                <th><?php echo $valor ?></th>
                <td><?php echo $nome ?></td>
            </tr>

        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

<br>
<br>


<form method="GET" action="">
    <label>
        Nome Da Nave:
        <br>
        <input type="text" name="nave">
    </label>
    <br>
    <br>

    <label>
        Tripulação:
        <br>
        <input type="text" name="trip">
    </label>
    <br>
    <br>

    <input type="submit" value="Enviar">
</form>

<br>


<form method="GET" action="">
    <label>
        Excluir Nave (insira o nome da nave):
        <br>
        <input type="text" name="excluir_nave">
    </label>
    <br>
    <input type="submit" value="Excluir Nave">
</form>

</body>
</html>
