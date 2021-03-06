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
                $sql = "CREATE TABLE resps(
                    	id INTEGER PRIMARY KEY AUTOINCREMENT,
                    	recName TEXT,
                    	category INTEGER,
                    	ingridients TEXT,
                    	direction TEXT,
                    	datetime INTEGER
                        )";
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
    
    function db2arr ($data){
        $arr = [];
        while($row = $data->fetchArray(SQLITE3_ASSOC)){
            $arr[] = $row;
        }
            
        return $arr;
    }
    
    function getRec(){
        $sql = "SELECT resps.id as id, recName, category.name as category, ingridients, direction,  datetime 
        FROM resps, category WHERE category.id = resps.category ORDER BY resps.id DESC";
        $res = $this->_db->query($sql);
        
        if(!$res){
            return false;
        } else {
            return $this->db2arr($res);
        }
    }
    function delRec(){}
    
    function __destruct()
    {
        unset($this->_db);
    }
    
}
    




