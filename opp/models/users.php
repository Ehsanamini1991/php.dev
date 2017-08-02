<?php
require_once 'db.php';

class users extends Db{
    
}
$user1=new users();
$user1->find(23);

?>