<?php

$conn = mysql_connect('localhost', 'panwarn1', 'Facebook','panwarn1_db');
if (!$conn) {
   die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db("search_box")) {
   echo "Unable to select mydbname: " . mysql_error();
   exit;
}
$sql="SELECT * FROM US_State_Zip";
$result = mysql_query("SELECT * FROM  US_State_Zip");

if(($results = mysql_query($sql)) && count($results) > 0)
{
  return $results[10];
}

print_r($sql);

while ($row = mysql_fetch_assoc($result)) 
{
        //$zip[]=$row['ZIP'];
}
mysql_free_result($result);
//mysql_close($link);

// check the parameter
if(isset($_GET['part']) and $_GET['part'] != '')
{
    // initialize the results array
    $results = array();

    // search colors
    foreach($Zips as $Zip)
    {
        // if it starts with 'part' add to results
        if( strpos($Zip, $_GET['part']) === 0 ){
            $results[] = $Zip;
        }
    }

    // return the array as json with PHP 5.2
    echo json_encode($results);
}