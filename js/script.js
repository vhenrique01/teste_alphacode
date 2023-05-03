
function validar(){
    var Mensagem = "";
    var form = document.getElementById('form');
    var Nome = form.nome;
    var data_nascimento = form.data_nascimento;
    var email = form.email;
    var profissao = form.profissao;
    var telefone = form.telefone;
    var celular = form.celular;

    if(Nome.value.trim() == ""){
        Mensagem  = Mensagem + "-Nome\n" 
    }

    if(data_nascimento.value.trim() == ""){
        Mensagem  = Mensagem + "-Data de Nascimento\n" 
    }

    if(email.value.trim() == ""){
        Mensagem  = Mensagem + "-E-mail\n" 
    }

    if(profissao.value.trim() == ""){
        Mensagem  = Mensagem + "-Profissão\n" 
    }

    if(telefone.value.trim() == ""){
        Mensagem  = Mensagem + "-Telefone para contato\n" 
    }

    if(celular.value.trim() == ""){
        Mensagem  = Mensagem + "-Celular para contato\n" 
    }

    if(Mensagem != ""){
        Swal.fire('Complete os Campos Abaixo:\n' + Mensagem);
        return false; // Evita o envio do formulário
    } else {
        
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: false,
            timer: 2000
          })
          
    }
    };

    
      