<?php

require_once("Livro.php");

interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($f);
    public function avancarPagina();
    public function voltarPagina();
} 