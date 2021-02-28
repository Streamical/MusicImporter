<?php
/*
 *
 *  Project: MusicImporter
 *  File: Album.php
 *  Last modified: 2/28/21, 5:53 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter\Models;


class Album
{
    private string  $albumTitle     = "";
    private array   $artists        = [];
    private ?string $coverImage     = null;
    private array   $genres         = [];
    private int     $releaseDate    = 0;
    private ?array  $songs          = null;
    private array   $licenses       = [];
    
    /**
     * @return string
     */
    public function getAlbumTitle(): string
    {
        return $this->albumTitle;
    }
    
    /**
     * @param string $albumTitle
     */
    public function setAlbumTitle(string $albumTitle): void
    {
        $this->albumTitle = $albumTitle;
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
     * @return string|null
     */
    public function getCoverImage(): ?string
    {
        return $this->coverImage;
    }
    
    /**
     * @param string|null $coverImage
     */
    public function setCoverImage(?string $coverImage): void
    {
        $this->coverImage = $coverImage;
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
     * @return int
     */
    public function getReleaseDate(): int
    {
        return $this->releaseDate;
    }
    
    /**
     * @param int $releaseDate
     */
    public function setReleaseDate(int $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }
    
    /**
     * @return array|null
     */
    public function getSongs(): ?array
    {
        return $this->songs;
    }
    
    /**
     * @param array|null $songs
     */
    public function setSongs(?array $songs): void
    {
        $this->songs = $songs;
    }
    
    /**
     * @return array
     */
    public function getLicenses(): array
    {
        return $this->licenses;
    }
    
    /**
     * @param array $licenses
     */
    public function setLicenses(array $licenses): void
    {
        $this->licenses = $licenses;
    }
    
    
}