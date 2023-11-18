<form action="" method="get">
    <label>
        NOVO NOME:
        <br>
        <input type="text" name="nome">
        <button type="submit">Adicionar</button>
    </label>
</form>
<h1>Listas de nomes</h1>

<?php
$arrayNomes = ['Sabrina','Junior','Adriana',''];


foreach ($arrayNomes as $todos) {
    echo $todos . "<br>";
}




