<?php
/*
 *
 *  Project: MusicImporter
 *  File: Genre.php
 *  Last modified: 2/28/21, 5:54 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter\Models;


class Genre
{
    private string $text = "";
    
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    
    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }
    
}