<?php
   
   if(!empty($_POST)) {
      echo $_POST['name'] . " - " . $_POST['email'];
   
   
   $sql = "INSERT INTO `users` ( `username`, `email`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "');";
   if (mysqli_query($conn, $sql)) {
      echo "INSERT";
      header("location: /");
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   mysqli_close($conn);
   }
?>

<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">User list</h6>
   </div>
   <div class="card-body">

      <form action="?page=add" method="POST">
         <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" id="username" placeholder="Enter yuor name">
         </div>

         <div class="mb-3">
            <label for="username" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="username" placeholder="Enter yuor email">
         </div>

         <button type="button" class="btn btn-success btn-lg">Save</button>
      </form>
   </div>
</div>