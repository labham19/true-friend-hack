<?php
  session_start();
  include("./backend/conn.php");
  if(!isset($_SESSION['user_id']) || !isset($_SESSION['hospitalName'])){
    echo '<script>window.location="./index.php"</script>';
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Info &starf;</title>
    
  </head>
  <body>
     <?php include('./components/Navbar.php')?>   
     
     <div class="container my-5 py-3">
        <form method="POST" action="./backend/bloodinfo.php">
          <div class="row">
             <input type="hidden" name="editId" id="editId"/>
             <div class="col-md-2">
               <label for="bloodGroup" class="form-label">Blood Group</label>
               <select class="form-control" required id="bloodGroup" name="bloodGroup">
                    <option selected>A+</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>B+</option>
               </select>
             </div>
             <div class="col-md-2">
               <label for="qty" class="form-label">Quantity</label>
               <input type="number" required class="form-control" id="qty" name="qty">
             </div>
             <div class="col-md-1">
               <label for="saveBtn" class="form-label">&nbsp;</label>
               <button type="submit" class="form-control btn btn-success" id="saveBtn" name="saveBtn"> <i class="fa fa-file" aria-hidden="true"></i> Save</button>
             </div>
             <div class="col-md-1">
               <label for="editBtn" class="form-label">&nbsp;</label>
               <button type="submit" class="form-control btn btn-warning" disabled id="editBtn" name="editBtn"> <i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
             </div>
             <div class="col-md-1">
               <label for="resetBtn" class="form-label">&nbsp;</label>
               <button type="button" class="form-control btn btn-primary" onclick="resetFun()" id="resetBtn" name="resetBtn"> <i class="fa fa-pencil" aria-hidden="true"></i> Reset</button>
             </div>
          </div>
        </form>

          <div class="my-5">
                <table class="table table-striped text-center table-hover">
                    <thead>
                         <tr>
                           <th>Sr No.</th>
                           <th>Blood Group</th>
                           <th>Qty</th>
                           <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                      <?php
                        $cnt=1;
                        $hospital_id = $_SESSION['user_id'];
                        $query = "SELECT * FROM `bloodinfo` WHERE `hospital_id`='$hospital_id'";
                        $query_fire = mysqli_query($conn,$query);
                      
                        if(mysqli_num_rows($query_fire)==0){
                        ?>
                        <tr>
                          <td colspan="4">Nothing to show !</td>
                        </tr>
                        <?php
                        }
                        else{
                           while($row = mysqli_fetch_assoc($query_fire)){
                        ?>
                          <tr>
                            <td><?=$cnt++?></td>
                            <td><?=$row['bloodGroup']?></td>
                            <td><?=$row['qty']?></td>
                            <td><i class="fa fa-pencil text-warning mx-2" onclick='editFetch(<?=json_encode($row)?>)' aria-hidden="true"></i> <i class="fa fa-trash text-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick='deleteFetch(<?=json_encode($row)?>)' aria-hidden="true"></i> </td>
                          </tr>
                        <?php   
                           }
                        }
                      ?>
                    </tbody>
                </table>
          </div>
     </div>

     <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Delete Comfirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delte this record ? 
        <form method="POST" action="./backend/bloodinfo.php">
        <input type="hidden" id="deleteItem" name="deleteItem"  />
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="deleteFinalBtn" name="deleteFinalBtn" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
      </div>
      </form>
    </div>
  </div>
</div>

 <script src="./js/addbloodinfo.js"></script>
</body>
</html>
