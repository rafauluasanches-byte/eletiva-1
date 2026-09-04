<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercícios - Lista 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
    <div class="container py-3">
        <h1>Exercícios - Lista 1</h1>
        <form method="post" action="repostalista1.php">
            <h3>Exercicio 5</h3>
            <div class="mb-3">
                <label for="tempc" class="form-label">Informe a temperatura em celcius</label>
                <input type="number" id="tempc" name="tempc" class="form-control" required="">
            </div>
            <h3>Exercício 6</h3>
            <div class="mb-3">
                <label for="tf" class="form-label">Digite a temperatura em fahrenheit</label>
                <input type="number" id="tf" name="tf" class="form-control" required="">
            </div>
            <h3>Exercício 7</h3>
            <div class="mb-3">
                <label for="largura" class="form-label">Digite a largura do retângulo</label>
                <input type="number" id="largura" name="largura" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Digite a altura do retângulo</label>
                <input type="number" id="altura" name="altura" class="form-control" required="">
            </div>
            <h3>Exercício 8</h3>
            <div class="mb-3">
                <label for="raio" class="form-label">Digite o raio do circulo</label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>