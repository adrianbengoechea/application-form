<?php
// DB CREDENTIALS
define('DB_HOST', 'localhost');
define('DB_NAME', 'application-form.local');
define('DB_USER', 'root');
define('DB_PASSWORD', ''); // No Password

class DB{
    private $db;
    function __construct(){
        // echo "created";
        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, array(
                PDO::ATTR_PERSISTENT => true
            ));
        }
        catch (PDOException $e) {
            print "Error connecting to the Database. " . $e->getMessage() . "<br/>";
            die();
        }

    }
    function do_shit(){
        return "Echo Here!!!";
    }
    function query($sql = false, $args = array()){
        // print_r($sql);
        // print_r($args);
        // return false;
        $result;
        if( $sql ){
            // return 'sql-here';
            $sth = $this->db->prepare($sql);
            try{
                $sth->execute($args);
                $result = $sth;
                // return $result;
            }catch(PDOException $e){
                $result = 'Something wrong. ' . $e->getMessage();
                die();
            }
        }else{
            $result = 'No Query Passed.';
        }
        return $result;
    }
}
?>