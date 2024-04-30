<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
  insert($_POST, 'users');
} 

require loadView('auth/signup');
 
