<?php
    if(isset($_GET['idproc'])){
        $idproc = $_GET['idproc'];
        require_once("conexao.php");
        $sql = "SELECT * FROM procedimentos WHERE idproc = :idproc";
        $resultado = $con->prepare($sql);
        $resultado->bindParam(':idproc', $idproc);
        $resultado->execute();
        $dados = $resultado->fetch();
        if (!$dados){
            die("Registro não encontrado!");
        }
    } else {
        die("Não é possível abrir o arquivo!");
    }
?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dados dos procedimentos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Dados dos procedimentos</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nomeProc" class="form-label">Informe o nome do procedimento</label>
                    <input value="<?= $dados['nomeProc']?>" type="text" id="nomeProc" name="nomeProc" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label">Informe o preço</label>
                    <input value="<?= $dados['preco']?>" type="number" id="preco" name="preco" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="profi" class="form-label">Informe o profissional</label>
                    <input value="<?= $dados['profi']?>" type="text" id="profi" name="profi" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="excluirProc.php?idproc=<?= $dados['idproc'] ?>" class="btn btn-danger">Excluir</a>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $nomeProc = $_POST['nomeProc'];
                    $preco = $_POST['preco'];
                    $profi = $_POST['profi'];
                    require_once("conexao.php");
                    $sql = "UPDATE procedimentos SET nomeProc = :nomeProc, preco = :preco, profi = :profi WHERE idproc = :idproc";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":nomeProc", $nomeProc);
                    $resultado->bindParam(":preco", $preco);
                    $resultado->bindParam(":profi", $profi);
                    $resultado->bindParam(":idproc", $idproc);
                    if($resultado->execute())
                        header("Location: indexProc.php");
                    else   
                        echo "<p>Erro ao inserir!</p>";
                }
            ?>
            <a href="indexProc.php">Voltar</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>