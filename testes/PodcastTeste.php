<?php


echo "<h2>Teste Podcast</h2>";

$podcast = new Podcast(
    "Flow Podcast",
    120,
    "Igor Coelho"
);

$resultado = $podcast->reproduzir();

if ($resultado === "Reproduzindo podcast: Flow Podcast - Host: Igor Coelho") {
    echo "✅ Teste deu certo";
} else {
    echo "❌ Teste falhou";
    echo "<br>Resultado: " . $resultado;
}
