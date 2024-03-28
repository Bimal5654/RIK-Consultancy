<?php
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DATA Add</title>
  </head>
  <body>
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="card">
                <div class="card-header">
                    <h4>Company Data</h4>
                </div>
                <div class="card-body">
                  <?php
                    if(isset($_SESSION['status']) && $_SESSION != '')
                    {
                      ?>                     
                    
                       <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       <strong>HEY!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                      <?php
                       unset($_SESSION['status']);
                    }

                  ?>
                 

                 <form action="cade.php" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" name="com_title" class="form-control">
                   </div>

                   <div class="form-group">
                      <label for="">Discription</label>
                      <input type="text" name="com_discription" class="form-control">
                   </div>

                   <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" name="com_image" class="form-control">
                   </div>

                   <div class="form-group">
                      <button name="save_img" class="btn btn-primary">Send</button>
                   </div>
                 </form>
                </div>
             </div>
          </div>
       </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>