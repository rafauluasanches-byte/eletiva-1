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
        <h1>Exercícios - Lista 1 (5 a 19)</h1>
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
            <h3>Exercício 9</h3>
            <div class="mb-3">
              <label for="altR" class="form-label">Digite a altura do retangulo</label>
              <input type="number" id="altR" name="altR" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="largR" class="form-label">Digite a largura do retangulo</label>
              <input type="number" id="largR" name="largR" class="form-control" required="">
            </div>
            <h3>Exercício 10</h3>
            <div class="mb-3">
              <label for="r1" class="form-label">Digite o raio do circulo</label>
              <input type="number" id="r1" name="r1" class="form-control" required="">
            </div>
            <h3>Exercício 11</h3>
            <div class="mb-3">
              <label for="base" class="form-label">Informe a base da potencia</label>
              <input type="number" id="base" name="base" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="expoente" class="form-label">Informe o expoente</label>
              <input type="number" id="expoente" name="expoente" class="form-control" required="">
            </div>
            <h3>Exercício 12</h3>
            <div class="mb-3">
              <label for="metro" class="form-label">Informe a quantidade em metros</label>
              <input type="number" id="metro" name="metro" class="form-control" required="">
            </div>
            <h3>Exercício 13</h3>
            <div class="mb-3">
              <label for="km" class="form-label">Informe a quantidade em Km</label>
              <input type="number" id="km" name="km" class="form-control" required="">
            </div>
            <h3>Exercício 14</h3>
            <div class="mb-3">
              <label for="peso" class="form-label">Informe o seu peso</label>
              <input type="number" id="peso" name="peso" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="alt" class="form-label">Informe a sua altura</label>
              <input type="number" id="alt" name="alt" class="form-control" required="">
            </div>
            <h3>Exercício 15</h3>
            <div class="mb-3">
              <label for="preco" class="form-label">Digite o preço</label>
              <input type="number" id="preco" name="preco" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="desconto" class="form-label">Digite a porcentagem de desconto</label>
              <input type="number" id="desconto" name="desconto" class="form-control" required="">
            </div>
            <h3>Exercício 16</h3>
            <div class="mb-3">
              <label for="capital1" class="form-label">Digite o valor do capital</label>
              <input type="number" id="capital1" name="capital1" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="taxa1" class="form-label">Digite o valor da taxa</label>
              <input type="number" id="taxa1" name="taxa1" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="periodo1" class="form-label">Digite o periodo</label>
              <input type="number" id="periodo1" name="periodo1" class="form-control" required="">
            </div>
            <h3>Exercício 17</h3>
            <div class="mb-3">
              <label for="dias" class="form-label">Informe o valor em dias</label>
              <input type="number" id="dias" name="dias" class="form-control" required="">
            </div>
            <h3>Exercício 18</h3>
            <div class="mb-3">
              <label for="capital2" class="form-label">Digite o valor do capital do juros compostos</label>
              <input type="number" id="capital2" name="capital2" class="form-control" required="">
            </div><div class="mb-3">
              <label for="taxa2" class="form-label">Digite o valor da taxa</label>
              <input type="number" id="taxa2" name="taxa2" class="form-control" required="">
            </div><div class="mb-3">
              <label for="periodo2" class="form-label">Digite o período</label>
              <input type="number" id="periodo2" name="periodo2" class="form-control" required="">
            </div>
            <h3>Exercício 19</h3>
            <div class="mb-3">
              <label for="dist" class="form-label">Digite a distancia</label>
              <input type="number" id="dist" name="dist" class="form-control" required="">
            </div>
            <div class="mb-3">
              <label for="tempo" class="form-label">Digite o tempo</label>
              <input type="number" id="tempo" name="tempo" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>
</html>