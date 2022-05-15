<?php
date_default_timezone_set("Asia/Calcutta");
class database
{

    public $que;

    private $servername = 'localhost';

    private $username = 'root';

    private $password = '';

    private $dbname = 'product_billing';

    private $result = array();

    private $mysqli = '';


    public function __construct()
    {

        $this->mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }


    public function insert($table, $para = array())
    {

        $table_columns = implode(',', array_keys($para));

        $table_value = implode("','", $para);


        $sql = "INSERT INTO $table($table_columns) VALUES('$table_value')";

        // echo $sql;

        $result = $this->mysqli->query($sql);
    }


    public function update($table, $para = array(), $id)
    {

        $args = array();


        foreach ($para as $key => $value) {

            $args[] = "$key = '$value'";
        }

        $sql = "UPDATE  $table SET " . implode(',', $args);

        // echo 'Query - Update';
        $sql .= " WHERE $id";
echo $sql;
        $result = $this->mysqli->query($sql);
    }


    public function delete($table, $id)
    {

        $sql = "DELETE FROM $table";

        $sql .= " WHERE $id ";

        $sql;

        $result = $this->mysqli->query($sql);
    }


    public $sql;


    public function select($table, $fields = "*", $where = null,$between=null, $like = null, $table2 = null, $match2 = null, $table3 = null, $match3 = null,$table4 = null, $match4 = null, $orderby = null, $limit = null,$GROUP = null,$ORDERBY=null){

        // if ($where != null and $like !=null){

        //          $sql="SELECT $fields FROM $table WHERE $where LIKE $like";

        //          echo 'Query - 1';

        // }


        // else if ($where!=null and $table2!=null and $fields!=null and $match1!="" and  $limit!=""){
        //         echo 'Query - 2';
        //          $sql="SELECT $fields FROM $table inner join $table2 ON $match1 WHERE $where $limit";

        // }
        if ($where != null and $limit==null and $table2==null) {
            //echo 'Query - 1';
            $sql = "SELECT $fields FROM $table WHERE $where";


        }   
             
        else if ($where != null and  $between!="" and  $table2 != null and $match2 != "" and $table3 != null and $match3 != "" and $table4 != null and $match4 != ""  and $limit == "") {
            //echo 'Query - 3';
           $sql = "SELECT $fields FROM $table inner join $table2 ON $match2 inner join $table3 ON $match3 inner join $table4 ON $match4 WHERE $where  BETWEEN $between  $limit";
            //echo $sql;

           

       }

        else if ($where != null and  $table2 != null and $match2 != "" and $table3 != null and $match3 != "" and $table4 != null and $match4 != "" and $limit == "") {
             //echo 'Query - 2';
            $sql = "SELECT $fields FROM $table inner join $table2 ON $match2 inner join $table3 ON $match3 inner join $table4 ON $match4 WHERE $where  $limit";
             //echo $sql;

        }


        else if ($where != null and $table2 != null and $match2 != "" and $table3 != null and $match3 != "" and $limit == "" and $ORDERBY!="") {
             //echo 'Query - 4';
            $sql = "SELECT DISTINCT $fields FROM $table left join $table2 ON $match2 left join $table3 ON $match3  WHERE $where $limit GROUP BY $GROUP ORDER BY $ORDERBY";
             //echo $sql;

        }
        else if($where!=null and $table2!=null and $match2!=null){
             //echo 'Query - 5';
            $sql = "SELECT $fields FROM $table left join $table2 ON $match2 WHERE $where";
             //echo $sql;  
        }         
        // } else if ($orderby != null) {
        //     echo 'Query - 5';
        //     $sql = "SELECT $fields FROM $table $orderby";
       
        // } 
        else {
            // echo 'Query - 5';
            $sql = "SELECT $fields FROM $table";
        }
       
        $this->sql = $result = $this->mysqli->query($sql);
    }
    public function __destruct(){

        $this->mysqli->close();
    }
}
