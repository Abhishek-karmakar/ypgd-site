
<?php

// response json
$json = array();

/**
 * delete the row from the table based on param
 * If param == true; delete that row else deleteall
 */
    include_once './db_functions.php';

if (isset($_POST["md5sum"]))  // check if md5sum is sent else send to deletelAll ; use carefully
{ 
    
    
    $md5sum = $_POST["md5sum"]; // get the md5sum
    // Store user details in db
    include_once './GCM.php';

    $db = new DB_Functions();

    $res = $db->clearbymd5($md5sum);

    echo $res;
} else 
{
	$db = new DB_Functions(); 
        $res = db->clearAll();
    	echo $res;
}
?>
