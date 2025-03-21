<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


    <div>
        <p class="title">Nome do produto: <strong>Sabonete Actine - Nova Fórmula</strong></p>
        <form action="form.php" method="post">
            <div>
                <label for="text">Valor original do produto:</label>
                <input type="number" name="valorOriginal">
            </div>
            <div>
                <label for="text">Valor do desconto:</label>
                <input type="number" name="valorDesconto">
            </div>
            <div>
                <button name="btn">Calcular Valor do produto</button>
                <p>Valor total do produto: <span name="valorTotalDoProduto"></span></p>
            </div>
        </form>
    </div>
</body>
</html>
