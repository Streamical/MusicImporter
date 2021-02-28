<?php
/*
 *
 *  Project: MusicImporter
 *  File: Song.php
 *  Last modified: 2/28/21, 5:46 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter\Models;

class Song
{
    private string  $songTitle      = "";
    private array   $artists        = [];
    private ?array  $audiofiles     = [];
    private array   $genres         = [];
    private array   $licences       = [];
    
    /**
     * @return string
     */
    public function getSongTitle(): string
    {
        return $this->songTitle;
    }
    
    /**
     * @param string $songTitle
     */
    public function setSongTitle(string $songTitle): void
    {
        $this->songTitle = $songTitle;
    }
    
    /**
     * @return array
     */
    public function getArtists(): array
    {
        return $this->artists;
    }
    
    /**
     * @param array $artists
     */
    public function setArtists(array $artists): void
    {
        $this->artists = $artists;
    }
    
    /**
     * @return array|null
     */
    public function getAudiofiles(): ?array
    {
        return $this->audiofiles;
    }
    
    /**
     * @param array|null $audiofiles
     */
    public function setAudiofiles(?array $audiofiles): void
    {
        $this->audiofiles = $audiofiles;
    }
    
    /**
     * @return array
     */
    public function getGenres(): array
    {
        return $this->genres;
    }
    
    /**
     * @param array $genres
     */
    public function setGenres(array $genres): void
    {
        $this->genres = $genres;
    }
    
    /**
     * @return array
     */
    public function getLicences(): array
    {
        return $this->licences;
    }
    
    /**
     * @param array $licences
     */
    public function setLicences(array $licences): void
    {
        $this->licences = $licences;
    }
    
}