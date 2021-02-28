<?php
/*
 *
 *  Project: MusicImporter
 *  File: Licence.php
 *  Last modified: 2/28/21, 5:55 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter\Models;


class Licence
{
    private string $licensor = "";
    private string $licensee = "";
    private string $licenseArchiveFile = "";
    
    /**
     * @return string
     */
    public function getLicensor(): string
    {
        return $this->licensor;
    }
    
    /**
     * @param string $licensor
     */
    public function setLicensor(string $licensor): void
    {
        $this->licensor = $licensor;
    }
    
    /**
     * @return string
     */
    public function getLicensee(): string
    {
        return $this->licensee;
    }
    
    /**
     * @param string $licensee
     */
    public function setLicensee(string $licensee): void
    {
        $this->licensee = $licensee;
    }
    
    /**
     * @return string
     */
    public function getLicenseArchiveFile(): string
    {
        return $this->licenseArchiveFile;
    }
    
    /**
     * @param string $licenseArchiveFile
     */
    public function setLicenseArchiveFile(string $licenseArchiveFile): void
    {
        $this->licenseArchiveFile = $licenseArchiveFile;
    }
    
}