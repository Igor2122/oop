<?php 


interface RecDBIntrface 
{
    function saveRec($name, $ingrd, $dir);
    function getRec();
    function delRec();
}
