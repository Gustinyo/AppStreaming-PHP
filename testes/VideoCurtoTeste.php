<?php

require_once __DIR__ . "/../classes/VideoCurto.php";

echo "<h2>Teste Vídeo Curto</h2>";

$video = new VideoCurto(
    "Tutorial PHP",
    60,
    "DevMaster"
);

$resultado = $video->reproduzir();

if ($resultado === "Assistindo vídeo curto: Tutorial PHP - Criador: DevMaster") {
    echo "✅ Teste deu certo";
} else {
    echo "❌ Teste falhou";
    echo "<br>Resultado: " . $resultado;
}