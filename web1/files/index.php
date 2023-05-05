<?php
highlight_file(__FILE__);
if(isset($_GET['c'])){
    $c = $_GET['c'];
    if(!preg_match("/flag/", $c)){
        eval($c);
    }
else{
echo "nonono";
}
    
}
