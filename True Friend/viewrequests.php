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
    <title>Requests &starf;</title>
    
  </head>
  <body>
     <?php include('./components/Navbar.php')?>   
     
     <div class="container my-5 py-3">
         <h3 class="text-center mt-3">Recent Requests</h3>
          <div class="my-5">
                <table class="table table-striped text-center table-hover">
                    <thead>
                         <tr>
                           <th>Sr No.</th>
                           <th>Blood Group</th>
                           <th>User Name</th>
                           <th>Email</th>
                           <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                      <?php
                        $cnt=1;
                        $hospital_id = $_SESSION['user_id'];
                        $query = "SELECT requests.id,requests.bloodGroup,qty,name,email FROM `requests` join `recievers` on requests.reciever_id=recievers.id WHERE `hospital_id`=$hospital_id";
                        $query_fire = mysqli_query($conn,$query);
                      
                        if(mysqli_num_rows($query_fire)==0){
                        ?>
                        <tr>
                          <td colspan="5">Nothing to show !</td>
                        </tr>
                        <?php
                        }
                        else{
                           while($row = mysqli_fetch_assoc($query_fire)){
                        ?>
                          <tr>
                            <td><?=$cnt++?></td>
                            <td><?=$row['bloodGroup']?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['email']?></td>
                            <td>
                                <i class="fa fa-thumbs-up text-success mx-2" aria-hidden="true" onclick="alert('No Functionality To This Operation Has Been Added Yet.')"></i>
                                <i class="fa fa-trash text-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteFetch(<?=$row['id']?>)" aria-hidden="true"></i>
                            </td>
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
        <form method="POST" action="./backend/handleRequests.php">
        <input type="hidden" id="deleteItem" name="deleteItem"  />
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="denyRequest" name="denyRequest" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  const deleteFetch = (id) =>{
    document.getElementById('deleteItem').value=id;
  }
</script>
</body>
</html>
