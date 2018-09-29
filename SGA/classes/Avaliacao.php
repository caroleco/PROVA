<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 16/03/2018
 * Time: 21:17
 */

class Avaliacao
{

    private $idAvaliacao;
    private $curso_idcurso;
    private $turma_idturma;
    private $aluno_idaluno;
    private $nota1;
    private $nota2;
    private $notafinal;

    /**
     * Avaliacao constructor.
     * @param $idAvaliacao
     * @param $curso_idcurso
     * @param $turma_idturma
     * @param $aluno_idaluno
     * @param $nota1
     * @param $nota2
     * @param $notafinal
     */
    public function __construct($idAvaliacao, $curso_idcurso, $turma_idturma, $aluno_idaluno, $nota1, $nota2, $notafinal)
    {
        $this->idAvaliacao = $idAvaliacao;
        $this->curso_idcurso = $curso_idcurso;
        $this->turma_idturma = $turma_idturma;
        $this->aluno_idaluno = $aluno_idaluno;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->notafinal = $notafinal;
    }

    /**
     * @return mixed
     */
    public function getIdAvaliacao()
    {
        return $this->idAvaliacao;
    }

    /**
     * @param mixed $idAvaliacao
     */
    public function setIdAvaliacao($idAvaliacao): void
    {
        $this->idAvaliacao = $idAvaliacao;
    }

    /**
     * @return mixed
     */
    public function getCursoIdcurso()
    {
        return $this->curso_idcurso;
    }

    /**
     * @param mixed $curso_idcurso
     */
    public function setCursoIdcurso($curso_idcurso): void
    {
        $this->curso_idcurso = $curso_idcurso;
    }

    /**
     * @return mixed
     */
    public function getTurmaIdturma()
    {
        return $this->turma_idturma;
    }

    /**
     * @param mixed $turma_idturma
     */
    public function setTurmaIdturma($turma_idturma): void
    {
        $this->turma_idturma = $turma_idturma;
    }

    /**
     * @return mixed
     */
    public function getAlunoIdaluno()
    {
        return $this->aluno_idaluno;
    }

    /**
     * @param mixed $aluno_idaluno
     */
    public function setAlunoIdaluno($aluno_idaluno): void
    {
        $this->aluno_idaluno = $aluno_idaluno;
    }

    /**
     * @return mixed
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * @param mixed $nota1
     */
    public function setNota1($nota1): void
    {
        $this->nota1 = $nota1;
    }

    /**
     * @return mixed
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * @param mixed $nota2
     */
    public function setNota2($nota2): void
    {
        $this->nota2 = $nota2;
    }

    /**
     * @return mixed
     */
    public function getNotafinal()
    {
        return $this->notafinal;
    }

    /**
     * @param mixed $notafinal
     */
    public function setNotafinal($notafinal): void
    {
        $this->notafinal = $notafinal;
    }


}
