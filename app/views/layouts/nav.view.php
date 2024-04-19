<!DOCTYPE html>
<head>
<!DOCTYPE html>
<html lang="en">

<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
      <img src="https://as1.ftcdn.net/v2/jpg/01/32/67/54/1000_F_132675456_2I1T2Qo0g1fd3o5pUpPv59RUrCH5sbWl.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
     <?=APP_NAME?>
    </a>
    <div style="display: flex; color: white; text-align:center; padding-top: 10px; text-decoration:none;" class="links-container">
        <ul style="display: flex; gap: 20px; align-items: baseline; list-style: none; font-size: 22px; ">
           <a href="index.php?page_name=home">
            <li class="menu-item">Home</li>
         </a>
              <a href="index.php?page_name=admin">
            <li class="menu-item">Admin</li>
         </a>
               <a href="index.php?page_name=login">
            <li class="menu-item">Login</li>
         </a>
               <a href="index.php?page_name=signup">
            <li class="menu-item">Sign Up</li>
         </a>
        </ul>
        <div style="margin-left: 20px;" class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Hey, User!
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
    </div>
      
   
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
</html>
<?php

?>