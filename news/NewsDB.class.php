<?php

require_once 'INewsDB.class.php';



class NewsDB implements INewsDB
{
    const DB_NAME = '../news.db';
    
    private $_db = null;
    function __get($name)
    {
        if($name == "db")
        {
            return $this->_db;
        } else 
        {
            throw new Exception("Unknown Properties !");
        }
    }   
    
    function __construct ()
    {
        if(is_file(self::DB_NAME)){
            $this->_db = new SQLite3(self::DB_NAME);
        }  else {
            // creating new DB with the cost name through self::
            $this->_db = new SQLite3(self::DB_NAME); 
            $sql = "CREATE TABLE msgs(
                	id INTEGER PRIMARY KEY AUTOINCREMENT,
                	title TEXT,
                	category INTEGER,
                	description TEXT,
                	source TEXT,
                	datetime INTEGER
                    )";
        }
    }
    
    function __destruct ()
    {
        unset($this->_db);
    }
    
    function saveNews($title, $category, $description, $source)
    {
        
    }
    
    function getNews()
    {
        
    }
    
    function deleteNews($id)
    {
        
    }
}


$news = new NewsDB();



