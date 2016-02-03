<?php

namespace model\equipe;

use lib\util\Object;

/**
 * @Entity
 * @Table(name="equipe")
 */
class Equipe extends Object {

    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;

    /** @Column(type="string") */
    private $nome;

    /** @Column(type="date") */
    private $nascimento;

    /** @Column(type="string") */
    private $endereco;

    /** @Column(type="string") */
    private $escolaridade;

    /** @Column(type="boolean") */
    private $trabalhaMagisterio;

    /** @Column(type="string") */
    private $especializacao;

    /** @Column(type="text") */
    private $cursos;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getEscolaridade() {
        return $this->escolaridade;
    }

    function getTrabalhaMagisterio() {
        return $this->trabalhaMagisterio;
    }

    function getEspecializacao() {
        return $this->especializacao;
    }

    function getCursos() {
        return $this->cursos;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
        return $this;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    function setEscolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
        return $this;
    }

    function setTrabalhaMagisterio($trabalhaMagisterio) {
        $this->trabalhaMagisterio = $trabalhaMagisterio;
        return $this;
    }

    function setEspecializacao($especializacao) {
        $this->especializacao = $especializacao;
        return $this;
    }

    function setCursos($cursos) {
        $this->cursos = $cursos;
        return $this;
    }

}
