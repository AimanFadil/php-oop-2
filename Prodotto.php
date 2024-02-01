<?php
class Prodotto
{
    //Property
    public $prezzo;
    public $img;
    public $nome;
    public $categoria;

    function __construct($_prezzo, $_img, $_nome, $_categoria)
    {
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->nome = $_nome;
        $this->categoria = $_categoria;
    }

    function getPrezzo()
    {
        return $this->prezzo;
    }

    function getImg()
    {
        return $this->img;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getCategoria()
    {
        return $this->categoria;
    }
}
