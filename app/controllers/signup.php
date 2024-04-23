<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $role = 'user';
    $date = date('Y-m-d H:i:s');
    $_POST['role'] = $role;
    $_POST['date'] = $date;
    $query = 'INSERT INTO users (username, email, password, date, role) VALUES (:username, :email, :password, :date, :role)';
    $arr = allowed_columns($_POST, 'users');
    query($query, $arr);
}

require loadView('auth/signup');
 
