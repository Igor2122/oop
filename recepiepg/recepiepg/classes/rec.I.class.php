<?php 


interface RecDBIntrface 
{
    function saveRec( $category, $name,$ingrd, $dir);
    function getRec();
    function delRec();
}
