<?php 

class SuperUser extends User
    {
        public $role;
        
        function __construct($n, $l, $pssrd, $pos)
        {
            parent::__construct($n, $l, $pssrd);
            $this->role = $pos;
        }
        
        function showInfo()
        {
            parent::showInfo();
            echo "Position: {$this->role}";
        }
        
    }