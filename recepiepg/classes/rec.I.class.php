<?php 


interface RecDBIntrface 
{
    function saveRec( $category, $recName, $ingridients, $direction);
    function getRec();
    function delRec();
}
