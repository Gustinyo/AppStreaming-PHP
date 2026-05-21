<?php
declare(strict_types=1);

require_once "Midia.php";

class Playlist
{
    /**
     * @var Midia[]
     */
    private array $midias = [];

    public function adicionarMidia(Midia $midia): void
    {
        $this->midias[] = $midia;
    }

    public function reproduzirPlaylist(): void
    {
        echo "=== PLAYLIST ===\n\n";

        foreach ($this->midias as $midia) {
            echo $midia->reproduzir() . "\n";
        }
    }
}