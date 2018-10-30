<?php 

include_once 'rec.I.class.php';

class RecDB implements RecDBIntrface
{
    const DB_NAME = '../recepies.db';
    
    private $_db = 'null';
    
    function __construct()
    {
        $this->_db = new SQLite3(self::DB_NAME); 
        
        if(filesize(self::DB_NAME) == 0){
            $this->_db = new SQLite3(self::DB_NAME);
                $sql = "CREATE TABLE resps(
                    	id INTEGER PRIMARY KEY AUTOINCREMENT,
                    	recName TEXT,
                    	category INTEGER,
                    	ingridients TEXT,
                    	direction TEXT,
                    	datetime INTEGER
                        )";
                $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
                
                $sql  = "CREATE TABLE categ(
                        id INTEGER,
                        name TEXT
                )";
            
                $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    
                $sql  = "INSERT INTO categ(id, name)
                        SELECT 1 as id, 'MainCourse' as name
                        UNION SELECT 2 as id, 'Apetizer' as name
                        UNION SELECT 3 as id, 'Dessert' as name ";
                $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            
            $sql  = "CREATE TABLE category(
                        id INTEGER,
                        name TEXT
                )";
                
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    
                $sql  = "INSERT INTO category(id, name)
                        SELECT 1 as id, 'Politics' as name
                        UNION SELECT 2 as id, 'Culture' as name
                        UNION SELECT 3 as id, 'Sport' as name ";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
        
            }
    }
    
    
    function saveRec( $category, $recName, $ingridients, $direction){
        $dt = time();
        
        $sql = "INSERT INTO resps(category, recName, ingridients, direction, datetime) 
        VALUES($category, '$recName', '$ingridients', '$direction', $dt)";

        return $this->_db->exec($sql);
        
    }
    
    
    function getRec(){}
    function delRec(){}
    
    function __destruct()
    {
        unset($this->_db);
    }
    
    // Safety functions
    
    
}
    




