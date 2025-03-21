<?php
    $valorOriginal = $_POST['valorOriginal'];
    $valorDesconto = $_POST['valorDesconto'];

    if (isset($_POST['btn'])) {
        if (!is_numeric($valorDesconto) && !is_numeric($valorOriginal)) {
            echo "Informe um número válido";
        }

        $valorTotal = $valorOriginal - $valorDesconto;
        echo "O valor total do produto é : " . $valorTotal;
    }

    // echo "Nome do Produto : " . "<strong>" . $nomeProduto . "</strong><br>";
    // echo "Valor original do produto : R$" . $valorOriginal . "<br>";
    // echo "Valor do desconto : R$" . $valorDesconto . "<br>";
    // echo "Valor total do produto : <strong>R$" . $valorTotal . "</strong>";     
?>