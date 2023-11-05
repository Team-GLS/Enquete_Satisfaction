<?php
$data      = json_decode ( file_get_contents ( 'php://input' ), true );
$userIndex = 1; // You can manage the generation of this index according to your needs
$fileName  = "saveData/user_$userIndex.json";
$result    = file_put_contents ( $fileName, json_encode ( $data ) );

if ( $result === false )
    {
    echo "An error occurred while saving the data.";
    } else
    {
    echo "Data saved successfully.";
    }
?>