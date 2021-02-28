<?php
/*
 *
 *  Project: MusicImporter
 *  File: Artist.php
 *  Last modified: 2/28/21, 5:54 PM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter\Models;

class Artist
{
    private string  $artistName     = "";
    private ?array  $metaInfo       = null;
    private ?string $avatarImage    = null;
    private ?array  $members        = null;
    private ?array  $albums         = null;
    
    /**
     * @return string
     */
    public function getArtistName(): string
    {
        return $this->artistName;
    }
    
    /**
     * @param string $artistName
     */
    public function setArtistName(string $artistName): void
    {
        $this->artistName = $artistName;
    }
    
    /**
     * @return array|null
     */
    public function getMetaInfo(): ?array
    {
        return $this->metaInfo;
    }
    
    /**
     * @param array|null $metaInfo
     */
    public function setMetaInfo(?array $metaInfo): void
    {
        $this->metaInfo = $metaInfo;
    }
    
    /**
     * @return string|null
     */
    public function getAvatarImage(): ?string
    {
        return $this->avatarImage;
    }
    
    /**
     * @param string|null $avatarImage
     */
    public function setAvatarImage(?string $avatarImage): void
    {
        $this->avatarImage = $avatarImage;
    }
    
    /**
     * @return array|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }
    
    /**
     * @param array|null $members
     */
    public function setMembers(?array $members): void
    {
        $this->members = $members;
    }
    
    /**
     * @return array|null
     */
    public function getAlbums(): ?array
    {
        return $this->albums;
    }
    
    /**
     * @param array|null $albums
     */
    public function setAlbums(?array $albums): void
    {
        $this->albums = $albums;
    }
    
}