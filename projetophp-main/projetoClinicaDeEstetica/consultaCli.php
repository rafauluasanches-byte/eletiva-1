<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("conexao.php");
        $sql = "SELECT * FROM cliente WHERE id = :id";
        $resultado = $con->prepare($sql);
        $resultado->bindParam(':id', $id);
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
        <title>Dados do Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Dados do Cliente</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nomeCli" class="form-label">Informe o nome</label>
                    <input value="<?= $dados['nomeCli']?>" type="text" id="nomeCli" name="nomeCli" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="telefoneCli" class="form-label">Informe o telefone</label>
                    <input value="<?= $dados['telefoneCli']?>" type="text" id="telefoneCli" name="telefoneCli" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="cpfCli" class="form-label">Informe o CPF</label>
                    <input value="<?= $dados['cpfCli']?>" type="text" id="cpfCli" name="cpfCli" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="enderecoCli" class="form-label">Informe o endereço</label>
                    <input value="<?= $dados['enderecoCli']?>" type="text" id="enderecoCli" name="enderecoCli" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="excluirCli.php?id=<?= $dados['id'] ?>" class="btn btn-danger">Excluir</a>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $nomeCli = $_POST['nomeCli'];
                    $telefoneCli = $_POST['telefoneCli'];
                    $cpfCli = $_POST['cpfCli'];
                    $enderecoCli = $_POST['enderecoCli'];
                    require_once("conexao.php");
                    $sql = "UPDATE cliente SET nomeCli = :nomeCli, telefoneCli = :telefoneCli, cpfCli = :cpfCli, enderecoCli = :enderecoCli WHERE id = :id";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":nomeCli", $nomeCli);
                    $resultado->bindParam(":telefoneCli", $telefoneCli);
                    $resultado->bindParam(":cpfCli", $cpfCli);
                    $resultado->bindParam(":enderecoCli", $enderecoCli);
                    $resultado->bindParam(":id", $id);
                    if($resultado->execute())
                        header("Location: indexCli.php");
                    else   
                        echo "<p>Erro ao inserir!</p>";

                }
            ?>
            <a href="indexCli.php">Voltar</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>