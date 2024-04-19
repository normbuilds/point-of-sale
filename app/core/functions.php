<?php
function show($bug)
{
    echo "<pre>";
    print_r($bug);
    echo "</pre>";
}

function loadView($view)
{
if(file_exists('../app/views/'.$view.'.view.php'))
{
    return '../app/views/'.$view.'.view.php';
}
else
{
     echo 'no view found';
}
}



