<?php 

include_once 'rec.I.class.php';

class RecDB implements RecDBIntrface
{
    const DB_NAME = '../recepies.db';
    
    private $_db = 'null';
    
    function __construct()
    {
    if(is_file(self::DB_NAME)){
            $this->_db = new SQLite3(self::DB_NAME); 
        }  else {
            $this->_db = new SQLite3(self::DB_NAME);
            $sql = "CREATE TABLE resps(
                	id INTEGER PRIMARY KEY AUTOINCREMENT,
                	recName TEXT,
                	category INTEGER,
                	ingridients TEXT,
                	description TEXT,
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
        }
    }
    
    
    function saveRec( $category, $recName, $ingridients, $directions){
        $sql = "INSERT INTO resps(category, recName, ingridients, description) 
        VALUES($category, $recName, $ingridients, $directions)";

        return $this->_db->exec($sql);
    }
    function getRec(){}
    function delRec(){}
    
    
}
    



