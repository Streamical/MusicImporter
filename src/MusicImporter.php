<?php
/*
 *
 *  Project: MusicImporter
 *  File: MusicImporter.php
 *  Last modified: 2/28/21, 5:10 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter;

use duncan3dc\MetaAudio\Tagger;
use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;
use Symfony\Component\Filesystem\Exception\IOException;

class MusicImporter
{
    
    public function scanDirForMediaFiles(string $dir): array
    {
        $mediaFiles = [];
        
        $di = new \RecursiveDirectoryIterator( $dir );
        $di->setFlags( \RecursiveDirectoryIterator::SKIP_DOTS  );
        
        $filter = new MiRecursiveFilterIterator( $di );
        
        
        foreach ( new \RecursiveIteratorIterator( $filter ) as $filename => $file ) {
            if($filename != ".." && $filename != ".") {
                echo $filename . ' - ' . $file->getSize() / 1024 . ' kb.' . PHP_EOL;
                $mediaFiles[] .= $filename;
            }
        }
        
        return $mediaFiles;
    }
    
    public function bulkCreateLicenceTxt( array $mediaFiles ) {
        foreach ($mediaFiles as $mediaFile) {
            if(file_exists(Utility::removeFileExt($mediaFile)
                ."_licence.txt"))
                break;
            
            touch(Utility::removeFileExt($mediaFile) ."_licence.txt");
        }
    }
    
    public function bulkCreateSourceTxt( array $mediaFiles ) {
        foreach ($mediaFiles as $mediaFile) {
            if(file_exists(Utility::removeFileExt($mediaFile)
                ."_source.txt"))
                break;
            
            touch(Utility::removeFileExt($mediaFile) ."_source.txt");
        }
    }
    
    public function bulkCreateGenreTxt( array $mediaFiles ) {
        foreach ($mediaFiles as $mediaFile) {
            if(file_exists(Utility::removeFileExt($mediaFile)
                ."_genre.txt"))
                break;
            
            touch(Utility::removeFileExt($mediaFile) ."_genre.txt");
        }
    }
}

