<?php
/*
 *
 *  Project: MusicImporter
 *  File: Utility.php
 *  Last modified: 2/28/21, 5:04 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter;


class Utility
{
    public static function removeFileExt(string $filename ) :string {
        $tmpStr = explode('.', $filename);
        unset( $tmpStr[ count( $tmpStr ) -1 ] );
        return implode( ".", $tmpStr );
    }
}