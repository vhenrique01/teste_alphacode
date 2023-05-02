<?php
    include_once('config.php');
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM contatos WHERE id = $id";
        $result = $conexao->query($sql);
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }
?>
