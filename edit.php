<?php
include_once('config.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nome = $_POST['editnome'];
    $data_nasc = $_POST['editnascimento'];
    $email = $_POST['editemail'];
    $celular = $_POST['editcelular'];

    $sql = "UPDATE contatos SET nome='$nome', data_nasc='$data_nasc', email='$email', celular='$celular' WHERE id='$id'";

    

    if (mysqli_query($conexao, $sql)) {
        echo "Contato atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o contato: " . mysqli_error($conexao);
    }
}

mysqli_close($conexao);

?>
