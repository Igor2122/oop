<?php 

include_once 'rec.I.class.php';

class RecDB implements RecDBIntrface
{
    const DB_NAME = '../recipe.db';
    
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
                	directions TEXT,
                	datetime INTEGER
                    )";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    
        }
        
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
    
    
    function saveRec($name, $ingrd, $dir){}
    function getRec(){}
    function delRec(){}
    
    
}
    

    

$res = new RecDB();