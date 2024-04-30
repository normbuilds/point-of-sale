<!DOCTYPE html>
<html lang="en">
<?php require loadView('./layouts/header') ?>
<body>
<form method="post">
      <div class="container-fluid col-lg-6  col-md-8">
    <center style="margin-top: 2rem; border:2px solid black; padding:2rem">
        <h2>Login</h2>
        <div class="">
            <p><?=APP_NAME?></p>
        </div>
        <div class="input-group mb-3">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input name="username" type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
    <label for="floatingInputGroup1">Username</label>
  </div>
</div>
        
<div class="form-floating">
  <input name="password"  type="text" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>

   <div style="display: flex; justify-content: space-between" class="btn-box">
     

       <input style="margin-top: 1rem;" class="btn btn-primary" type="submit" value="Login">
   </div>
    </center>
  
  </div>
   
</form>
<<?php require loadView('./layouts/footer') ?>