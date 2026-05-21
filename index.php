<?php
declare(strict_types=1);

require_once "classes/Musica.php";
require_once "classes/Podcast.php";
require_once "classes/VideoCurto.php";
require_once "classes/Playlist.php";

$musica = new Musica(
    "Blinding Lights",
    200,
    "The Weeknd"
);

$podcast = new Podcast(
    "Flow Podcast",
    3600,
    "Igor Coelho"
);

$video = new VideoCurto(
    "Tutorial PHP",
    60,
    "DevMaster"
);

$playlist = new Playlist();

$playlist->adicionarMidia($musica);
$playlist->adicionarMidia($podcast);
$playlist->adicionarMidia($video);

$playlist->reproduzirPlaylist();