<?php
/*
 *
 *  Project: MusicImporter
 *  File: MiRecursiveFilterIterator.php
 *  Last modified: 2/28/21, 5:11 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter;

class MiRecursiveFilterIterator extends \RecursiveFilterIterator
{
    public static array $FILTERS = array(
        'Genre.txt',
        'Licence.txt',
        'Source.txt',
    );
    
    public function accept(): bool
    {
        $tmpArray = explode("_", $this->current()->getFilename());
        if(end($tmpArray) == "genre.txt"
            || end($tmpArray) == "licence.txt"
            || end($tmpArray) == "source.txt")
            return false;
        
        //var_dump($this->current()->getFilename());
        
        return !in_array(
            $this->current()->getFilename(),
            self::$FILTERS,
            true
        );
    }
}