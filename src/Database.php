<?php


namespace Streamical\MusicImporter;


use function MongoDB\Client;

class Database extends MusicImporter
{
    private \MongoDB $mongo;
    
    // mongodb://s:s@localhost:27017/?authSource=admin&readPreference=primary&ssl=false
    public function __construct(string $hostname, string $username, string $password, string $authSource, int $port) {
        $this->mongo = Client(
            'mongodb+srv://<username>:<password>@<cluster-address>/test?retryWrites=true&w=majority'
        );
    }
    
    public function open() {
    
    }
}