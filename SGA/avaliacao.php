<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 16/03/2018
 * Time: 21:16
 */

include_once "estrutura/Template.php";
require_once "dao/avaliacaoDAO.php";
require_once "classes/avaliacao.php";

$template = new Template();
$object = new avaliacaoDAO();

$template->header();
$template->sidebar();
$template->navbar();


// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $curso = (isset($_POST["curso"]) && $_POST["curso"] != null) ? $_POST["curso"] : "";
    $turma = (isset($_POST["turma"]) && $_POST["turma"] != null) ? $_POST["turma"] : "";
    $avaliacao = (isset($_POST["avaliacao"]) && $_POST["avaliacao"] != null) ? $_POST["avaliacao"] : "";
    $nota1 = (isset($_POST["nota1"]) && $_POST["nota1"] != null) ? $_POST["nota1"] : "";
    $nota2 = (isset($_POST["nota2"]) && $_POST["nota2"] != null) ? $_POST["nota2"] : "";
    $notafinal = (isset($_POST["notafinal"]) && $_POST["notafinal"] != null) ? $_POST["notafinal"] : "";
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $curso = NULL;
    $turma = NULL;
    $avaliacao = NULL;
    $nota1 = NULL;
    $nota2 = NULL;
    $notafinal = NULL;
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {

    $avaliacao = new avaliacao($id, '', '','','','','');

    $resultado = $object->atualizar($avaliacao);
    $curso = $curso_idcurso->getCursoIdcurso();
    $turma = $turma_idturma->getTurmaIdturma();
    $avaliacao = $avaliacao_idaluno->getAlunoIdaluno();
    $nota1 = $nota1->getNota1();
    $nota2 = $nota2->getNota2();
    $notafinal = $notafinal->getNotafinal();
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $curso != "" && $turma != "" && $avaliacao != "" && $nota1 != "" && $nota2 != "" && $notafinal != "") {
    $avaliacao = new avaliacao($id, $curso, $turma, $avaliacao, $nota1, $nota2, $notafinal);
    $msg = $object->salvar($avaliacao);
    $id = null;
    $curso = null;
    $turma = null;
    $avaliacao=null;
    $nota1=null;
    $nota2=null;
    $notafinal=null;
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    $avaliacao = new avaliacao($id,'','','','','','' );
    $msg = $object->remover($avaliacao);
    $id = null;
}

?>

<div class='content' xmlns="http://www.w3.org/1999/html">
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='card'>
                    <div class='header'>
                        <h4 class='title'>Avaliação</h4>
                        <p class='category'>Lista de avaliações do sistema</p>

                    </div>
                    <div class='content table-responsive'>

                        <form action="?act=save&id=" method="POST" name="form1">
                            <hr>
                            <i class="ti-save"></i>
                            <input type="hidden" name="id" value="<?php
                            // Preenche o id no campo id com um valor "value"
                            echo (isset($id) && ($id != null || $id != "")) ? $id : '';
                            ?>"/>
                            Curso:
                            <input type="text" size="50" name="nome" value="<?php
                            // Preenche o nome no campo nome com um valor "value"
                            echo (isset($curso) && ($curso != null || $curso != "")) ? $curso : '';
                            ?>"/>
                            <br>
                            <br>
                            Turma:
                            <input type="numer" size="7" name="matricula" value="<?php
                            // Preenche o sigla no campo sigla com um valor "value"
                            echo (isset($turma) && ($turma != null || $turma != "")) ? $turma : '';
                            ?>"/>
                            <br>
                            <br>
                            Aluno:
                            <input type="text" size="50" name="nome" value="<?php
                            // Preenche o nome no campo nome com um valor "value"
                            echo (isset($avaliacao) && ($avaliacao != null || $avaliacao != "")) ? $avaliacao : '';
                            ?>"/>
                            <br>
                            <br>
                            Nota 1:
                            <input type="text" size="50" name="nome" value="<?php
                            // Preenche o nome no campo nome com um valor "value"
                            echo (isset($nota1) && ($nota1 != null || $nota1 != "")) ? $nota1 : '';
                            ?>"/>
                            <br>
                            <br>
                            Nota 2:
                            <input type="text" size="50" name="nome" value="<?php
                            // Preenche o nome no campo nome com um valor "value"
                            echo (isset($nota2) && ($nota2 != null || $nota2 != "")) ? $nota2 : '';
                            ?>"/>
                            <br>
                            <br>
                            Nota Final:
                            <input type="text" size="50" name="nome" value="<?php
                            // Preenche o nome no campo nome com um valor "value"
                            echo (isset($notafinal) && ($notafinal != null || $notafinal != "")) ? $notafinal : '';
                            ?>"/>
                            <input type="submit" VALUE="Cadastrar"/>
                            <hr>
                        </form>


                        <?php

                        echo (isset($msg) && ($msg != null || $msg != "")) ? $msg : '';

                        //chamada a paginação
                        $object->tabelapaginada();

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$template->footer();
?>
