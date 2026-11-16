<?php
    if(isset($_GET['idprofi'])){
        $idprofi = $_GET['idprofi'];
        require_once("conexao.php");
        $sql = "SELECT * FROM profissionais WHERE idprofi = :idprofi";
        $resultado = $con->prepare($sql);
        $resultado->bindParam(':idprofi', $idprofi);
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
        <title>Dados do Profissional</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Dados do Profissional</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nomeProfi" class="form-label">Informe o nome do Profissional</label>
                    <input value="<?= $dados['nomeProfi']?>" type="text" id="nomeProfi" name="nomeProfi" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="telefoneProfi" class="form-label">Informe o telefone</label>
                    <input value="<?= $dados['telefoneProfi']?>" type="text" id="telefoneProfi" name="telefoneProfi" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="enderecoProfi" class="form-label">Informe o endereço</label>
                    <input value="<?= $dados['enderecoProfi']?>" type="text" id="enderecoProfi" name="enderecoProfi" class="form-control" required="">
                </div>
                <div class="mb-3">
                    <label for="cnpjProfi" class="form-label">Informe o CNPJ</label>
                    <input value="<?= $dados['cnpjProfi']?>" type="text" id="cnpjProfi" name="cnpjProfi" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="excluirProf.php?idprofi=<?= $dados['idprofi'] ?>" class="btn btn-danger">Excluir</a>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $nomeProfi = $_POST['nomeProfi'];
                    $telefoneProfi = $_POST['telefoneProfi'];
                    $enderecoProfi = $_POST['enderecoProfi'];
                    $cnpjProfi = $_POST['cnpjProfi'];
                    require_once("conexao.php");
                    $sql = "UPDATE profissionais SET nomeProfi = :nomeProfi, telefoneProfi = :telefoneProfi, enderecoProfi = :enderecoProfi, cnpjProfi = :cnpjProfi WHERE idprofi = :idprofi";
                    $resultado = $con->prepare($sql);
                    $resultado->bindParam(":nomeProfi", $nomeProfi);
                    $resultado->bindParam(":telefoneProfi", $telefoneProfi);
                    $resultado->bindParam(":enderecoProfi", $enderecoProfi);
                    $resultado->bindParam(":cnpjProfi", $cnpjProfi);
                    $resultado->bindParam(":idprofi", $idprofi);
                    if($resultado->execute())
                        header("Location: indexProf.php");
                    else   
                        echo "<p>Erro ao inserir!</p>";
                }
            ?>
            <a href="indexProf.php">Voltar</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>