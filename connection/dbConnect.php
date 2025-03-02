<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "getthewebsite";
    private $from_email= "noreply@getthewebsite.net";
    private $notify_email= "frogbidofficial@gmail.com";
    private $conn;

    function __construct() {
        if($_SERVER['SERVER_NAME']=="getthewebsite.net"||$_SERVER['SERVER_NAME']=="www.getthewebsite.net"){
            $this->host = "localhost";
            $this->user = "u994228968_getthewebsite";
            $this->password = "u3!GIE1=]#qm";
            $this->database = "u994228968_getthewebsite";
        }

        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function checkValue($value) {
        $value=mysqli_real_escape_string($this->conn, $value);
        return $value;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function insertQuery($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function from_email(){
        return $this->from_email;
    }

    function notify_email(){
        return $this->notify_email;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
