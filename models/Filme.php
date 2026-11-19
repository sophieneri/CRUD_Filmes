<?php

class Filme
{
    private $titulo;
    private $genero;
    private $ano;
    private $diretor;

    public function __construct($titulo, $genero, $ano, $diretor)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano = $ano;
        $this->diretor = $diretor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function getDiretor()
    {
        return $this->diretor;
    }
}

?>