<!DOCTYPE html>
<html lang="en">
<?php require loadView('./layouts/header') ?>



<div class="container-fluid mt-5">
<div class=" p-3 shadow">
<center class="">
<h2><?=APP_NAME?></h2>
</center>
</div>
</div>
<center>
   
<div class="container-fluid d-flex p-3 justify-content-between mt-5 ">

    <div style="height:600px;" class=" shadow col-7">
     <center><h3>Items</h3></center>
    <div  class="search-container  mt-3 d-flex align-items-center justify-content-around p-3 ">
        <input class="form-control me-2 w-75" type="search" placeholder="Search" aria-label="Search">
      <div style="width: 100px;" class="search-icon-container">
        <i class="fa-solid fa-magnifying-glass"></i> 
      </div>
     
    </div>
     <div  style="height:480px; overflow-y: scroll;" class="js-products p-4 d-flex gap-2">
        <div class="card" style="width: 10rem; height: 16rem">
  <img style=" height: 150px;" src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to buildt.</p>
  </div>
        </div>

   <div class="card" style="width: 10rem; height: 16rem">
  <img style=" height: 150px;" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=962&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to buildt.</p>
  </div>
  
</div>
      </div>

</div>


        <div class=" col-4">
            <center class="pb-4"><h3>Cart</h3></center>
        <table class="table table-striped text-center ">
            <tr>
                <th>Image</th>
                <th>Description</th>
                <th>Amount</th>
              
                
            </tr>
            <td>
            <div style="max-width: 100px;" class="card shadow ">
               <img style="  height: 100px;" src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" >
            </div>
            </td>
            <td>yerr
             <div class="input-group mb-3
             d-flex
             justify-content-between
             ">
  <span class="input-group-text">@</span>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
    <label for="floatingInputGroup1">Username</label>
     <span class="input-group-text">@</span>
  </div>
</div>
          
            </td>
            <td>
              $5.00
            </td>
        </table>
        <div class="bg-danger mb-3">
          Total
        </div>
        <div class="d-flex justify-content-between">
         <button type="button" class="btn btn-danger">Cacncel</button> 
          <button type="button" class="btn btn-success">check out</button>
        </div>
    </div>
</div>
</center>

<?php require loadView('./layouts/footer') ?>

