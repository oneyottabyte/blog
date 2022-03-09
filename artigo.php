<?php

class Artigo
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {
        $consulta = $this->mysql->query("SELECT id, titulo, conteudo FROM artigos");
        $artigos = $consulta->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }
}
