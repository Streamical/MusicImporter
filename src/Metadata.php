<?php


namespace Streamical\MusicImporter;


use Exception;
use FFMpeg\FFProbe;
use Symfony\Component\Filesystem\Exception\IOException;

class Metadata extends MusicImporter
{
    private $ffprobe = null;
    private $song = null;
    private $filename = "";
    
    public function __construct($filename = null)
    {
        $this->ffprobe = FFProbe::create();
        $this->filename = $filename;
        
        if ($this->filename != null) {
            if (!file_exists($filename))
                throw new IOException("Failed to read $filename");
            
            $this->song = $this->ffprobe->format($filename);
        }
    }
    
    /**
     * Opens song file
     * @param $filename
     * @return void
     * @throws IOException
     */
    public function openSong($filename): void
    {
        if (!file_exists($filename))
            throw new IOException("Failed to read $filename");
        
        $this->song = $this->ffprobe->format($filename);
        $this->filename = $filename;
    }
    
    public function closeSong(): void
    {
        $this->song = null;
    }
    
    /**
     * Read song title
     * @return string
     * @throws Exception
     */
    public function readSongTitle(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song title.");
        
        return $this->song->get("tags")["title"];
    }
    
    public function readSongAlbum(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song album.");
        
        return $this->song->get("tags")["album"];
    }
    
    public function readSongArtist(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song artist.");
        
        return $this->song->get("tags")["artist"];
    }
    
    public function readSongYear(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song date.");
        
        return date("Y", strtotime($this->readSongDate()));
    }
    
    public function readSongDate(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song date.");
        
        return $this->song->get("tags")["date"];
    }
    
    public function readSongMonth(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song date.");
        
        return date("m", strtotime($this->readSongDate()));
    }
    
    public function readSongDay(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song date.");
        
        return date("d", strtotime($this->readSongDate()));
    }
    
    public function readSongTrackNumber(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song track number.");
        
        return $this->song->get("tags")["track"];
    }
    
    public function readSongGenres(string $separator = ","): array
    {
        if ($this->song == null)
            throw new Exception("Unable to read song track number.");
        
        return explode($separator, $this->song->get("tags")["genre"]);
    }
    
    public function readSongGenre(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song track number.");
        
        return $this->song->get("tags")["genre"];
    }
    
    public function readSongComment(): string
    {
        if ($this->song == null)
            throw new Exception("Unable to read song comment.");
        
        return $this->song->get("tags")["comment"];
    }
    
}