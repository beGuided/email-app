<?php


class Db_object{


    public static function find_all(){
        $sql= "SELECT * FROM " . static::$db_table." ";
        return static:: find_query($sql);
    }

    public static function find_by_id($id){
        global $database;
        $sql = "SELECT * FROM " .static::$db_table ." WHERE id ={$id} LIMIT 1";
        $query_result = static::find_query($sql);
        return !empty($query_result)? array_shift($query_result) : false;

    }


    public static function find_query($sql){
        global $database;
        $query_result = $database->query($sql);
        $the_object_array = array();
        while($row = mysqli_fetch_array($query_result)){
            $the_object_array[] = static::instantiation($row);
        }
        return $the_object_array;
    }



    // returns a new instance of a class and assign its proerties value
    // = key of the  associative array from find_this_query()

    public static function instantiation($the_record){
        $calling_class = get_called_class();
        $the_object = new $calling_class();

        foreach ($the_record as $the_key=>$value){
            if($the_object->has_the_attribute($the_key)){
                $the_object->$the_key = $value;}
        }
        return $the_object;
    }

    // this function checks to see if the object properties mataches the info
    // from the database
    private function has_the_attribute($the_key){
        $object_properties = get_object_vars($this);
        return array_key_exists ($the_key, $object_properties);

    }// END OF USER CLASS


    protected function properties(){

        $properties = array();
        foreach (static::$db_table_field as $db_field){
            if(property_exists($this, $db_field)){
                $properties[$db_field] = $this->$db_field;
            }
        }
        return $properties;
    }

    protected function clean_properties(){
        global $database;
        $clean_properties = array();

        foreach ($this->properties() as $key =>$value ){
            $clean_properties[$key] = $database->escape_string($value);
        }
        return $clean_properties;
    }

    public function save(){
        return isset($this->id)?  $this->update() : $this->create();

    }

    public function create(){
        global $database;
        $properties = $this->clean_properties();

        $sql = "INSERT INTO ".static::$db_table ."(". implode(",", array_keys($properties)).")";
        $sql .= "VALUES ('" . implode("','", array_values($properties)) ."')";

        if ($database->query($sql)) {
            $this->id = $database->the_insert_id();
            return true;
        } else {
            return false;
        }

    }
    public  function update(){
        global $database;
        $properties = $this->clean_properties();
        $properties_pairs = array();
        foreach ($properties as $key => $value){
            $properties_pairs[] = "{$key}='{$value}'";

        }

        $sql = "UPDATE " .static::$db_table . " SET ";
        $sql .= implode(",", $properties_pairs);
        $sql .= " WHERE id=". $database->escape_string($this->id);

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) ==1) ?true : false;

    }

    public function delete(){
        global $database;
        $sql="DELETE FROM ".static::$db_table." ";
        $sql .= "WHERE id=" . $database->escape_string($this->id);
        $sql .= " LIMIT 1";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) ==1) ?true : false;

    }


}