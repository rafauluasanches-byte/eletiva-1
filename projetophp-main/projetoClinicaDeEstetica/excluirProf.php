<?php
    require_once("conexao.php");
    $idprofi = $_GET['idprofi'];
    $sql = "DELETE FROM profissionais WHERE idprofi = :idprofi";
    $resultado = $con->prepare($sql);
    $resultado->bindParam(":idprofi", $idprofi);
    $resultado->execute();
    header("Location: indexProf.php");
?>