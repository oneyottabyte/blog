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

    public function exibirPorId(string $id) : array
    {
        $selecionaArtigo = $this->mysql->prepare("SELECT id, titulo, conteudo FROM artigos WHERE id = ?");
        $selecionaArtigo->bind_param('s', $id);
        $selecionaArtigo->execute();
        $artigo = $selecionaArtigo->get_result()->fetch_assoc();
        return $artigo;
    }
}
