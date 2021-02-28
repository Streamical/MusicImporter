<?php
/*
 *
 *  Project: MusicImporter
 *  File: AudioFile.php
 *  Last modified: 2/28/21, 5:51 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter\Models;


class AudioFile
{
    private string $quality     = "";
    private string $fileName    = "";
    
    /**
     * @return string
     */
    public function getQuality(): string
    {
        return $this->quality;
    }
    
    /**
     * @param string $quality
     */
    public function setQuality(string $quality): void
    {
        $this->quality = $quality;
    }
    
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }
    
    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->fileName = $fileName;
    }
    
}