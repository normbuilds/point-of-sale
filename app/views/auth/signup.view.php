<!DOCTYPE html>
<html lang="en">
<?php require loadView('./layouts/header') ?>
<body>
<form method="post">
      <div class="container-fluid col-lg-6  col-md-8">
    <center style="margin-top: 2rem; border:2px solid black; padding:2rem">
        <h2>Sign Up</h2>
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
        <div class="form-floating mb-3">
  <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
<div class="form-floating">
  <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Re-enter Password">
  <label for="floatingPassword">Re-enter Password</label>
</div>
   <div style="display: flex; justify-content: space-between" class="btn-box">
     
     <input style="margin-top: 1rem;" class="btn btn-danger" type="submit" value="cancel">
       <input style="margin-top: 1rem;" class="btn btn-primary" type="submit" value="Submit">
   </div>
    </center>
  
  </div>
   
</form>
<<?php require loadView('./layouts/footer') ?>