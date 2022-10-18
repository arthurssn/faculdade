<?php
$error = false;
$mensagens = '';

if($_POST['nome']) {
$nome = $_POST['nome'];
    if(strlen($nome) < 6){
        $error = true;
        $mensagens .= "O campo nome deve conter pelo menos 6 caracteres. ";
    };
} else {
adicionaMensagemErro('nome') ;
}
if($_POST["senha"]){
 $senha = $_POST["senha"];
    if(strlen($senha) < 10){
        $error = true;
        $mensagens .= "O campo senha deve conter pelo menos 10 caracteres. ";
    };
} else {
adicionaMensagemErro('senha');
}

$_POST['sobrenome'] ? $sobrenome = $_POST['sobrenome'] : adicionaMensagemErro('sobrenome');
$_POST['idade'] ? $idade = $_POST['idade'] : adicionaMensagemErro('idade');
$_POST['nome_pai'] ? $nome_pai = $_POST['nome_pai'] : adicionaMensagemErro('nome_pai');
$_POST['nome_mae'] ? $nome_mae = $_POST['nome_mae'] : adicionaMensagemErro('nome_mae');
$_POST["email"] ? $email = $_POST["email"] : adicionaMensagemErro('email');
$_POST["telefone"] ? $telefone = $_POST["telefone"] : adicionaMensagemErro('telefone');
$_POST["pais"] ? $pais = $_POST["pais"] : adicionaMensagemErro('país');
$_POST["estado"] ? $estado = $_POST["estado"] : adicionaMensagemErro('estado');
$_POST["municipio"] ? $municipio = $_POST["municipio"] : adicionaMensagemErro('municipio');
$_POST["bairro"] ? $bairro = $_POST["bairro"] : adicionaMensagemErro('bairro');
$_POST["logradouro"] ? $logradouro = $_POST["logradouro"] : adicionaMensagemErro('logradouro');
$_POST["rua"] ? $rua = $_POST["rua"] : adicionaMensagemErro('rua') ;
$_POST["numero_casa"] ? $numero_casa = $_POST["numero_casa"] : adicionaMensagemErro('numero da casa');

function adicionaMensagemErro($field){
    global $error;
    global $mensagens;
    $error = true;
    $mensagens .= "O campo " . $field . " não pode ser vazio. \n";
    }
?>

<link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
    <div class="container mt-5">
        <?php
        if($error){
            ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo $mensagens;
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        if(!$error){
            ?>
            <div class="alert alert-primary" role="alert">
                <?php
                echo 'Tudo certo. Formulário enviado.';
                ?>
            </div>
            <?php
        }
        ?>
        <a href="formulario.php">
        <button class="btn btn-primary">Voltar</button>
        </a>
    </div>