<?php

const BASEPATH = __DIR__;

require_once BASEPATH . "/config.php";
require_once BASEPATH . "/vendor/autoload.php";

use Streamical\MusicImporter;

$metadata = new MusicImporter\Metadata();
$metadata->openSong("/home/javik/Desktop/Music/CC0 1.0 Universal/Loyalty Freak Music/TO CHILL AND STAY AWAKE/01 Loyalty Freak Music - Coexistenz.mp3");

try {
    echo $metadata->readSongTitle() . PHP_EOL;
    echo $metadata->readSongAlbum() . PHP_EOL;
    echo $metadata->readSongArtist() . PHP_EOL;
    echo $metadata->readSongDate() . PHP_EOL;
    echo $metadata->readSongTrackNumber() . PHP_EOL;
    echo $metadata->readSongYear() . PHP_EOL;
    echo $metadata->readSongMonth() . PHP_EOL;
    echo $metadata->readSongDay() . PHP_EOL;
} catch (Exception $e) {
} finally {
    $metadata->closeSong();
}

