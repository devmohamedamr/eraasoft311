<?php

namespace out;

class DB{

    private object $connection;
    private string $sql;
    public static string $table;
    
    function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","eraasoft_311");
    } 

    public static function table($table){
        self::$table = $table;
        return new static; 
    }

    public function select(string $columns = "*"): object
    {
        $table = self::$table;
        $this->sql = "SELECT $columns FROM `$table` ";
        return $this;
    }

    public function delete():object
    {
        $table = self::$table;

        $this->sql = "DELETE FROM `$table` ";
        return $this;
    }

    public function insert(array $data):object
    {
        $table = self::$table;

        $columns = "";
        $values = "";
        foreach($data as $key => $value){
            $columns .= "`$key` ,";
            $values .=  "'$value' ,";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");

        $this->sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
        return $this;
    }

    public function where(string $column,string $value,string $operator = "="):object
    {
        $this->sql .= "WHERE `$column` $operator '$value'";
        return $this;
    }

    public function excute():int
    {
         mysqli_query($this->connection,$this->sql); 
         return mysqli_affected_rows($this->connection);
    } 
    public function all():array
    {
        $query = mysqli_query($this->connection,$this->sql);
       return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function first():array
    {
        $query = mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_assoc($query);
    }

}