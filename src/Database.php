<?php
/*
 *
 *  Project: MusicImporter
 *  File: Database.php
 *  Last modified: 2/28/21, 12:21 AM
 *  By: javik
 *  * Copyright (c) 2021 Schneider, Benjamin & Wolfhard, Elias GbR
 *
 */

namespace Streamical\MusicImporter;

use MongoDB\BSON\ObjectId;

class Database
{
    private ?\MongoDB\Client $moClient;
    private $database;
    
    public function __construct(string $hostname = null,
                                string $username = null,
                                string $password = null,
                                string $database = null,
                                int $port = 27017)
    {
        if ( $hostname != null && $username != null && $password != null && $database != null )
            $this->connect( $hostname, $username, $password, $database, $port );
        
    }
    
    /**
     *
     */
    public function __destruct()
    {
        $this->disconnect();
    }
    
    
    public function connect(string $hostname,
                            string $username,
                            string $password,
                            string $database,
                            int $port = 27017) :void
    {
        
        try {
            $this->moClient = new \MongoDB\Client(
                "mongodb://$username:$password@$hostname/$database?retryWrites=true&w=majority"
            );
    
            $this->database = $this->moClient->$database;
        } catch (\MongoDB\Driver\Exception\AuthenticationException $e) {
            die ($e->getMessage());
        }
    }
    
    public function disconnect() :void {
        $this->moClient = null;
    }
    
    public function insert(string $collection, array $data) :int|ObjectId {
        try {
            $result = $this->database->$collection->insertOne($data);
            return ($result->getInsertedId());
        } catch (\MongoDB\Driver\Exception\AuthenticationException $e) {
            die ($e->getMessage());
        }
    }

}