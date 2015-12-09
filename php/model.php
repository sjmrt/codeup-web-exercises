<?php
require 'Input.php';
require 'model_config.php';
            
class Model {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    public function __construct()
    {
        self::dbConnect();
    }

    protected static function dbConnect()
    {
        if (!self::$dbc)
        {
            require 'db_connect.php';
            self::$dbc = $dbc;
        }
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }

    public function __set($name, $value)
    {
        $value = Input::escape($value);
        $this->attributes[$name] = $value;
    }
    /*
     * Persist the object to the database
     */
    public function save()
    {
        self::dbConnect();

        if(!empty($this->attributes)){
            if(isset($this->attributes['id'])){
                $this->update($this->attributes['id']);
            } else {
                $this->insert();
            }
        }    
    }
    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        self::dbConnect();
        // @TODO: Create select statement using prepared statements
        
        $query = "SELECT * from" . static::$table . "WHERE id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // @TODO: Store the resultset in a variable named $result
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;

        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();
        // @TODO: Learning from the previous method, return all the matching records
        $table = static::$table;
        $query = "SELECT * FROM $table";
        $result = self::$dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);
        $instance = null;
        
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    protected function insert()
    {

    }
    protected function update ($id)
    {

    }

}