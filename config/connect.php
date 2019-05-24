<?php
class database
{
    
    public $host = db_host;
    public $user = db_user;
    public $pass = db_pass;
    public $db = db_name;
    public $result;
    public $conn;
    public $site_name="Alom Enterprice";

    //conection start
    public function __construct()
    {
        $this->connection();
        date_default_timezone_set('Asia/Dhaka');
    }
    
    public function connection()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->conn) {
            echo "Conection failed";
        } else
            return 1;
    }

    public function date(){
        return $this->get_now_time();
    }

    public function get_now_time(){
        $now=date("Y-m-d H:i:s", time());
        return $now;
    }
    
    public function select($query)
    {
        return $this->result = mysqli_query($this->conn, $query);
    }
    
    public function date_to_string($date)
    {
        return date("d M Y h:i:A", strtotime($date));
    }

    public function get_select_last_id($query)
    {
        
        if (mysqli_query($this->conn, $query)) {
            return mysqli_insert_id($this->conn);
        } else
            0;
    }
    
    public function process_mysql_array($info)
    {
        $res = array();
        $c   = 0;
        foreach ($info as $key => $value) {
            if ($c % 2 == 1)
                $res[$key] = $value;
            $c++;
        }
        return $res;
    }
    
    public function get_sql_array($sql)
    {
        $info = array();
        $res  = $this->select($sql);
        while ($row = mysqli_fetch_array($res)) {
            $sub = array();
            $sub = $this->process_mysql_array($row);
            array_push($info, $sub);
        }
        return $info;
    }
    
    public function insert_sql($arr, $table)
    {
        $sql = "";
        $sql .= "INSERT INTO " . $table;
        $sql .= " (" . implode(",", array_keys($arr)) . ") VALUES ";
        $sql .= " ('" . implode("','", array_values($arr)) . "')";
        return $sql;
    }
    
    public function Update_sql($arr, $table)
    {
        $sql = "";
        $sql .= "UPDATE " . $table . " SET ";
        $condition = "";
        $size      = sizeof($arr);
        $c         = 0;
        foreach ($arr as $key => $value) {
            $condition .= $key . "='" . $value . "'";
            if ($c != $size - 1)
                $condition .= ",";
            $c++;
        }
        $sql .= $condition;
        $sql .= " WHERE id=" . $arr['id'];
        return $sql;
    }
    
    
    public function sql_action($table, $action, $info)
    {
        
        $flag        = 0;
        $action_name = "";
        
        if ($action == "update") {
            $action_name = "Update " . $table;
            $sql         = $this->update_sql($info, $table);
        } else if ($action == "insert") {
            $action_name = "Insert New " . $table;
            $sql         = $this->insert_sql($info, $table);
        } else if ($action == "delete") {
            $id          = $info['id'];
            $action_name = "Delete " . $table;
            $sql         = "DELETE FROM $table WHERE id=$id";
        }
        
        $res = $this->select($sql);
        //echo "$sql";
        if ($res)
            $flag = 1;
        
        $error                = array();
        $error['error']       = 0;
        $error['description'] = "";
        
        if ($flag == 0) {
            $error['error']       = 1;
            $error['description'] = mysqli_error($this->conn);
        }
        return $error;
    }
    
    // conection end
}
?>