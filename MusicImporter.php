<?php
/*
 *
 *  Project: MusicImporter
 *  File: MusicImporter.php
 *  Last modified: 2/28/21, 4:54 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

const BASEPATH = __DIR__;

require_once BASEPATH . "/config.php";
require_once BASEPATH . "/vendor/autoload.php";

use Streamical\MusicImporter;

global $config;

/*$metadata = new MusicImporter\Metadata();
$metadata->openSong("/home/javik/Desktop/Music/CC0 1.0 Universal/Loyalty Freak Music/TO CHILL AND STAY AWAKE/01 Loyalty Freak Music - Coexistenz.mp3");

$musicimporter = new MusicImporter\MusicImporter();
$mediaFiles = $musicimporter->scanDirForMediaFiles($config["path"]);

$musicimporter->bulkCreateLicenceTxt($mediaFiles);
$musicimporter->bulkCreateSourceTxt($mediaFiles);
$musicimporter->bulkCreateGenreTxt($mediaFiles);*/

$database = new MusicImporter\Database();

$database->connect($config["database"]["hostname"],
    $config["database"]["username"],
    $config["database"]["password"],
    $config["database"]["database"],
    $config["database"]["port"]);

$database->insert("songs", array ("Test" => "Test1"));