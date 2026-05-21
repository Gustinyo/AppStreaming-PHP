<?php
declare(strict_types=1);

require_once "Midia.php";

class Musica extends Midia
{
    public function __construct(
        string $titulo,
        int $duracao,
        private string $artista
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return "Tocando música: {$this->getTitulo()} - Artista: {$this->artista}";
    }
}