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
   $con = new PDO("mysql:host=".DBHOST.";dbname=pos_db", DBUSER, DBPASS);
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

function insert ($data, $table){
    
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password =$_POST['password'];
    $date= date('Y-m-d H:i:s', time());
    $role = 'user';

   $action = 'INSERT INTO users (username, email, password, date, role) VALUES (:username, :email, :password, :date, :role)';
    if($table == 'users'){
       $con = connectDB();
      $query = $con->prepare($action);
       $query->bindParam(':username', $username);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
         $query->bindParam(':date', $date);
          $query->bindParam(':role', $role);
        $query->execute();
        header('Location: index.php?page_name=login');
        die;

    } else
    {
        echo 'did not work ';
    }

}

function loginAuth($data)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $con = connectDB();
        $query = $con->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
        $query->bindParam(':username', $username);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
           
            if ($password == $user['password'] ) {
                 header('Location: index.php');
             
                exit; 
            } else {
             
                show($user);
            }
        } else {
            echo 'User not found';
        }
    }
}
