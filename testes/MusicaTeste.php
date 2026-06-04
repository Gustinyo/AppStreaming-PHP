<?php

require_once __DIR__ . "/../classes/Musica.php";

echo "<h2>Teste Música</h2>";

$musica = new Musica(
    "Blinding Lights",
    200,
    "The Weeknd"
);

$resultado = $musica->reproduzir();

if ($resultado === "Tocando música: Blinding Lights - Artista: The Weeknd") {
    echo "✅ Teste deu certo";
} else {
    echo "❌ Teste falhou";
    echo "<br>Resultado: " . $resultado;
}