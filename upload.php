<?php

if (empty($_FILES['arquivo'])) {
    echo 'Você não selecionou nenhum arquivo';
} else {
    $nome = $_FILES['arquivo']['name'];

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivo/' . $nome)) {
            echo 'O arquivo ', htmlspecialchars($nome),' foi carregado<br>';
    } else {
            echo 'O arquivo ', htmlspecialchars($nome),' não foi carregado<br>';
    }
}
