    <?php

        include_once('config.php');

        if(isset($_POST['submit']))
        {
            // print_r('Nome: ' . $_POST['nome']);
            // print_r('<br>');
            // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
            // print_r('<br>');
            // print_r('E-mail: ' . $_POST['email']);
            // print_r('<br>');
            // print_r('Profissão: ' . $_POST['profissao']);
            // print_r('<br>');
            // print_r('Telefone: ' . $_POST['telefone']);
            // print_r('<br>');
            // print_r('Celular: ' . $_POST['celular']);


            $nome = $_POST['nome'];
            $data_nasc = $_POST['data_nascimento'];
            $email = $_POST['email'];
            $profissao = $_POST['profissao'];
            $telefone = $_POST['telefone'];
            $celular = $_POST['celular'];

                $result = mysqli_query($conexao, "INSERT INTO contatos(nome,data_nasc,email,profissao,telefone,celular) 
                VALUES ('$nome','$data_nasc','$email','$profissao','$telefone','$celular')");
        }

        $sql = "SELECT * FROM contatos ORDER BY id DESC";

        $result = $conexao->query($sql);
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste | Alphacode</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="./css/style.css" rel="stylesheet">
        <script src="./js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar" data-bs-theme="dark">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="#">
                        <img src="assets/logo_alphacode.png" alt="Logo" class="d-inline-block align-text-top">
                    </a>
                    <span class="text-white ms-3 me-auto" style="font-weight: bold; font-size:24px;"><b>Cadastro de Contatos<b></span>
                </div>
            </nav>
        </header>
        <form action="teste.php" method="post" id="form" name="form">
            <div class="row justify-content-center inputs-container" style="margin-top: 50px;">
                <div class="col-md-5 inputBox mx-4">
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder="Ex.: Letícia Pacheco dos Santos" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="col-md-5 inputBox mx-4">
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" placeholder="Ex.: 03/10/2003" required>
                    <label for="data_nascimento" class="labelInput">Data de Nascimento</label>
                </div>
            </div>
            <div class="row justify-content-center inputs-container" style="margin-top: 50px;">
                <div class="col-md-5 inputBox mx-4">
                    <input type="email" name="email" id="email" class="inputUser" placeholder="Ex.: leticia@gmail.com" onblur="ValidaEmail(this)"required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <div class="col-md-5 inputBox mx-4">
                    <input type="text" name="profissao" id="profissao" class="inputUser" placeholder="Ex.: Desenvolvedora Web" required>
                    <label for="profissao" class="labelInput">Profissão</label>
                </div>
            </div>
            <div class="row justify-content-center inputs-container" style="margin-top: 50px;">
                <div class="col-md-5 inputBox mx-4">
                    <input type="text" name="telefone" id="telefone" class="inputUser" placeholder="Ex.: (11) 4033-2019" required>
                    <label for="telefone" class="labelInput">Telefone para contato</label>
                </div>
                <div class="col-md-5 inputBox mx-4">
                    <input type="text" name="celular" id="celular" class="inputUser" placeholder="Ex.: (11) 98493-2039" required>
                    <label for="celular" class="labelInput">Celular para contato</label>
                </div>
            </div>
            <div class="row justify-content-center inputs-container" style="margin-top: 50px;">
                <div class="col-md-5 inputBox mx-4">
                    <input type="checkbox" id="whats" name="whats" value="whats"  class="form-check-input" style="display: inline-block;">
                    <label for="whats" style="display: inline-block;">Número de celular possui Whatsapp</label>
                </div>
                <div class="col-md-5 inputBox mx-4">
                    <input type="checkbox" id="notificacao" name="notificacao" value="notificacao"  class="form-check-input" style="display: inline-block;">
                    <label for="notificacao" style="display: inline-block;">Enviar notificações por E-mail</label>
                </div>
            </div>
            <div class="row justify-content-center inputs-container" style="margin-top: 50px;">
                <div class="col-md-10 inputBox mx-4">
                    <input type="checkbox" id="sms" name="sms" value="sms"  class="form-check-input" style="display: inline-block;">
                    <label for="sms" class="form-check-label">Enviar notificações por SMS</label>
                </div>
            </div> 
            <div class="col-md-12 inputBox text-end" style="width: 95%;">  
                <input type="submit" name="submit" id="submit" value="Cadastrar contato" class="ml-auto" onclick="validar()">   
            </div>
        </form>
        <hr style="margin-top: 100px; margin-bottom: 80px;">
            <div class="container">
                <table class="table" style="margin-bottom: 200px;">
                    <thead style="background-color: #078ed0; color:white;">
                        <tr>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Data de nascimento</th>
                            <th class="text-center">E-mail</th>
                            <th class="text-center">Celular para contato</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                            echo "<tr>";
                            echo "<td class='text-center align-middle'>".$user_data['nome']."</td>";
                            echo "<td class='text-center align-middle'>" . date('d/m/Y', strtotime($user_data['data_nasc'])) . "</td>";
                            echo "<td class='text-center align-middle'>".$user_data['email']."</td>";
                            echo "<td class='text-center align-middle'>".$user_data['celular']."</td>";
                            echo "<td class='align-middle text-center'>
                            <a class='btn btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal' data-id='".$user_data['id']."' onclick='editContato(".$user_data['id'].")'>
                                <img src='assets/editar.png'>
                            </a>

                            <a class='btn btn-sm' href='delete.php?id=".$user_data['id']."' onclick=\"return confirm('Tem certeza que deseja excluir esse registro?');\">
                                <img src='assets/excluir.png'>
                            </a>
                            </td>";
                            echo "</tr>";
                            }
                        ?>          
                    </tbody>
                </table>
            </div>
                    <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Contato</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form id="formEditContato">
                            <input type="hidden" name="id" value="<?php echo $id['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <b>Nome: </b>
                                        <input type="text" value="" id="editnome" name="editnome" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <b>Data de nascimento: </b>
                                        <input type="text" value="" id="editnascimento" name="editnascimento" class="form-control money">
                                    </div>                             
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <b>E-mail: </b>
                                        <input type="text" value="" id="editemail" name="editemail" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <b>Celular para contato: </b>
                                        <input type="text"  value="" id="editcelular" name="editcelular" class="form-control">
                                    </div>                             
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary" id="btnSalvar">Salvar</button>
                            </div>
                        </div>
                    </div>
                        </form>
                </div>
        <footer style="background-color: #0e76a9; color: #fff; padding: 20px; height: 100px;">
            <div class="container d-flex justify-content-between">
                <div class="text-left" style="font-size: 16px;">
                    <p>Termos | Políticas</p>
                </div>
                <div class="text-center">
                    <p>© Copyright 2022 |
                    Desenvolvido por
                        <img src="assets/logo_rodape_alphacode.png" width="120px" alt="Logo Alphacode IT Solutions">
                    </p>
                </div>
                <div class="text-right" style="font-size: 16px;">
                    <p>©Alphacode IT Solutions 2022</p>
                </div>
            </div>
        </footer>
    </body> 
    <script>
    $('#btnSalvar').click(function() {
        var form = $('#formEditContato');
        $.ajax({
            url: 'edit.php',
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                console.log(response); // Verifica o resultado do PHP
                alert(response); // Exibe mensagem de sucesso ou erro
                location.reload(); // Atualiza a página
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown); // Verifica o erro
            }
        });
    });

    </script>

    <script>
        function editContato(id) {
        // Faz a requisição AJAX para buscar as informações do usuário a partir do id
        $.ajax({
            url: 'get_user.php',
            type: 'POST',
            data: { id: id },
            dataType: 'json',
            success: function(data) {
                // Preenche os campos da modal com as informações do usuário
                $('#editnome').val(data.nome);
                $('#editnascimento').val(data.data_nasc);
                $('#editemail').val(data.email);
                $('#editcelular').val(data.celular);
            }
        });
    }

    </script>
    <script>
        $(document).ready(function(){
    $('#nome').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS ', {
        translation: { 
        'S': { 
            pattern: /[\p{L}\s]/u 
        }
        }
    });
    
    $('#profissao').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS', {
        translation: { 
        'S': { 
            pattern: /[\p{L}\s]/u
        }
        }
    });
    });
    $(document).ready(function(){
        $('#telefone').mask('(00) 0000-0000');
    });
    $(document).ready(function(){
        $('#celular').mask('(00) 00000-0000');
    });
    </script>
    <script>
    function ValidaEmail(campo){
                    if(campo.value!='' && campo.value!=null){
                    var f = campo.value
                    if((f.indexOf("@") == -1) || (f.indexOf(".") == -1) && (f != '')){
                    window.alert('Email invalido');
                    campo.focus();
                        campo.value = '';
                        }
                    }
                    }
                
    </script>
    </html>