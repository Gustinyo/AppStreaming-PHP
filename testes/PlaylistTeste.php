<?php

require_once __DIR__ . "/../classes/Playlist.php";
require_once __DIR__ . "/../classes/Musica.php";

echo "<h2>Teste Playlist</h2>";

$playlist = new Playlist();

$musica = new Musica(
    "Blinding Lights",
    200,
    "The Weeknd"
);

$playlist->adicionarMidia($musica);

echo "✅ Música adicionada à playlist com sucesso";