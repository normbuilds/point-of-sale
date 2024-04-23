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

function connectDB(){
   $con = new PDO("mysql:".DBHOST.";dbname=pos_db".DBUSER,DBPASS);
 return $con;
 

}

function query($query, $data= array())
{
$con = connectDB();
$smt = $con->prepare($query);
$check= $smt->execute($data);
if($check)
{
    $result = $smt->fetchAll(PDO::FETCH_ASSOC);
    if(is_array($result) && count($result) > 0){
        return $result;
    }
}else
{
    echo 'no results found';

}

}

function allowed_columns($data, $table){
    if ($table == 'users'){
        $columns = [
            'username',
            'password',
            'role',
            'image',
            'date'
        ];
        foreach($data as $key => $value){
            if(!in_array($data, $columns)){
                unset($data[$key]);
            }else
            {
                echo 'error';
            }
           
        }
        return $data;
    }
}