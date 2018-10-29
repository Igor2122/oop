<?php 

include_once 'rec.I.class.php';

class RecDB implements RecDBIntrface
{
    const DB_NAME = '../news.db';
    
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
    }
    
    
    function saveRec($name, $ingrd, $dir){}
    function getRec(){}
    function delRec(){}
    
    
}
    

    

// $res = new RecDB();