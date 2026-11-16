<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index Profissionais</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body> 
        <div class="container py-3">
            <h1>Lista de profissionais</h1>
            <?php
                require_once("conexao.php");
                $sql = "SELECT * FROM profissionais";
                $resultado = $con->query($sql);
                $dados = $resultado->fetchAll();
                foreach ($dados as $d){
                    echo "<p>Nome do Profissional: ".$d['nomeProfi']." 
                                <a href='consultaProf.php?idprofi=".$d['idprofi']."'> Consultar</a></p>";
                }
            ?>
            <a href="cadastroProf.php" class="btn btn-primary">
                Novo Profissional</a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        </div>
    </body>
</html>