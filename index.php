<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="livraria.php"/> 
    <h1>Loja de Livros</h1>
    <h2>Promoção</h2>
    <form >
        
        <fieldset>
            <p>Uma cópia de qualquer um dos cinco livros custa R$8.</p>
            <p>Se, no entanto, você comprar dois livros diferentes, terá um desconto de 5% nesses dois livros.</p>
            <p>Se você comprar 3 livros diferentes, terá um desconto de 10%.</p>
            <p>Se você comprar 4 livros diferentes, terá um desconto de 20%.</p>
            <p>Se você comprar todos os 5, terá um desconto de 25%.</p>
            <p>Nota: se você comprar quatro livros, dos quais 3 são títulos diferentes,você ganha 10% de desconto nos 3 que fazem parte de um conjunto, mas o quarto livro ainda custa R$8.</p>
        </fieldset>
        <div>
            <label>Coleção 1</label>
            <input type="int" name="colecao1"/>
        </div>
        <br>
        <div>
            <label>Coleção 2</label>
            <input type="int" name="colecao2"/>
        </div>
        <br>
        <div>
            <label>Coleção 3</label>
            <input type="int" name="colecao3"/>
        </div>
        <br>
        <div>
            <label>Coleção 4</label>
            <input type="int" name="colecao4"/>
        </div>
        <br>
        <div>
            <label>Coleção 5</label>
            <input type="int" name="colecao5"/>
        </div>
        <br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>