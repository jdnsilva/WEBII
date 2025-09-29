<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monte seu Sanduíche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container mt-4">
        <h2>Monte seu Sanduíche</h2>
        <form action="processa_pedido.php" method="POST">

            <h3 class="mt-4">Onde comer?</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="local" name="local" value="No Local" required>
                <label class="form-check-label" for="local">Comer no local</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="levar" name="local" value="Para Levar">
                <label class="form-check-label" for="levar">Para levar</label>
            </div>

            <h3 class="mt-4">Tipo de Pão</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="integral" name="pao" value="Integral" required>
                <label class="form-check-label" for="integral">Integral</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="frances" name="pao" value="Francês">
                <label class="form-check-label" for="frances">Francês</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="australiano" name="pao" value="Australiano">
                <label class="form-check-label" for="australiano">Australiano</label>
            </div>

            <h3 class="mt-4">Proteína Principal</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="carne" name="proteina" value="Carne Bovina" required>
                <label class="form-check-label" for="carne">Carne</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="frango" name="proteina" value="Frango Grelhado">
                <label class="form-check-label" for="frango">Frango</label>
            </div>

            <h3 class="mt-4">Queijo</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="mussarela" name="queijo" value="Mussarela" required>
                <label class="form-check-label" for="mussarela">Mussarela</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="prato" name="queijo" value="Prato">
                <label class="form-check-label" for="prato">Prato</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="cheddar" name="queijo" value="Cheddar">
                <label class="form-check-label" for="cheddar">Cheddar</label>
            </div>

            <h3 class="mt-4">Vegetais</h3>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="alface" name="vegetais[]" value="Alface">
                <label class="form-check-label" for="alface">Alface</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tomate" name="vegetais[]" value="Tomate">
                <label class="form-check-label" for="tomate">Tomate</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="cebola" name="vegetais[]" value="Cebola Roxa">
                <label class="form-check-label" for="cebola">Cebola Roxa</label>
            </div>

            <h3 class="mt-4">Molhos</h3>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="maionese" name="molhos[]" value="Maionese">
                <label class="form-check-label" for="maionese">Maionese</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ketchup" name="molhos[]" value="Ketchup">
                <label class="form-check-label" for="ketchup">Ketchup</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="mostarda" name="molhos[]" value="Mostarda">
                <label class="form-check-label" for="mostarda">Mostarda</label>
            </div>

            <h3 class="mt-4">Pagamento</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="pix" name="pagamento" value="PIX" required>
                <label class="form-check-label" for="pix">PIX</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="cartao" name="pagamento" value="Cartão">
                <label class="form-check-label" for="cartao">Cartão</label>
            </div>
            
            <button type="submit" class="btn btn-success mt-4 mb-5">Fazer Pedido</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>