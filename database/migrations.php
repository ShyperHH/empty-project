<?php
class Database
{
    public $link;

    function __construct() {
        $this->connect();
    }

    public function connect(): static
    {
        $config = require_once 'app/config/database.php';
        try {
            $this->link = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['user'], $config['pass']);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $this;
    }

    public function execute($sql): mixed
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        return $sth;
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql): array
    {
        $exe = $this->execute($sql);

        $result = $exe->fetchAll(PDO::FETCH_ASSOC);
        if($result===false){
            return [];
        }
        return $result;
    }
}