<?php
// Example of a data mapper class.
class DataMapper{
    public $connection;
    public $dataObject;

    public function __construct($conn, $dataObject){
        $this->connection = $conn;
        $this->dataObject = $dataObject;
    }

    // CRUD methods operating on the connection and data object ...
}