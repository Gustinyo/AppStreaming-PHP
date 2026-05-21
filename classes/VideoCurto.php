<?php
declare(strict_types=1);

require_once "Midia.php";

class VideoCurto extends Midia
{
    public function __construct(
        string $titulo,
        int $duracao,
        private string $criador
    ) {
        parent::__construct($titulo, $duracao);
    }

    public function reproduzir(): string
    {
        return "Assistindo vídeo curto: {$this->getTitulo()} - Criador: {$this->criador}";
    }
}