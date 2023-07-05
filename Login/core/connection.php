<?php
require_once 'dbconfig.php';

abstract class Connection {
    protected $dbConnection;

    public function __construct()
    {
        try {
            $this->dbConnection= new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            $this->dbConnection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die;
        }
    }
}