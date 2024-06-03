<?php

class DatabaseController extends PDO
{
    public function __construct($dsn, $username, $password)
    {
        parent::__construct($dsn, $username, $password);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

class MemberController
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Add methods to interact with members data
}

class Controllers {

    protected $db = null;
    protected $members = null;

    public function __construct()
    {
        //----TEMP----//

        $type ='mysql';
        $server = '127.0.0.1';
        $db = 'BroadleighGardens';
        $port = '3306';
        $charset = 'latin1';

        $username = 'root';
        $password = '';
    
         //----TEMP----//

        $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
    
        try {
            $this->db = new DatabaseController($dsn, $username, $password); 
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }
    }

    public function members()
    {
        if ($this->members === null) {
            $this->members = new MemberController($this->db);
        }
        return $this->members;
    }
}

// Usage example:
$controller = new Controllers();
$members = $controller->members();
// Add code to interact with $members object

?>
