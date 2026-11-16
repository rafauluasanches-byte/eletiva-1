<?php
    require_once("conexao.php");
    $id= $_GET['idproc'];
    $sql = "DELETE FROM procedimentos WHERE idproc = :idproc";
    $resultado = $con->prepare($sql);
    $resultado->bindParam(":idproc", $id);
    $resultado->execute();
    header("Location: indexProc.php");
?>