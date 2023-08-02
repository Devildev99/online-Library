<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NGP Online Library</title>
    <style>

*{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

      }
      body{
        min-height: 100vh;
        background: #eee;
        display: flex;
        font-family: comic Sans MS;
      }
      .container{
        margin: auto;
        width: 500px;
        max-height: 90%;

      }
      .container form{
        width: 100%;
        height: 100%;
        padding: 20px;
        background: white;
        border-radius: 4px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      }
      .container form h1{
        text-align: center;
        margin-bottom: 24px;
        color: #222;
}

.container form .form-control{
  width: 100%;
  height: 40px;
  background: white;
  border-radius: 4px;
  border: 1px solid silver;
  margin: 10px 0 18px 0;
  padding: 0 10px;
}

.container form .btn-btn-primary{
margin-left: 50%;
transform: translateX(-50%);
width: 100px;
height: 30px;
border: none;
outline: none;
background: #27a327;
cursor: pointer;
font-size: 16px;
text-transform: uppercase;
color: white;
border-radius: 4px;
transition: .3s;
}


    </style>
  </head>
  <body style="background-color: grey;">
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <center><h1 style="font-family: arial;">NOTICE WITH PDF UPLOAD</h1></center>
              
            </div>
            <div class="card-body">
    <div class="">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
       <b> <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <form>
          
         <b> <label>Notes:</label>
        <input type="text" name="notes" class="form-control" placeholder=" Enter Notice" value="" required><br>
        <b><label>Semester:</label>
        <input type="text" name="sem" class="form-control" placeholder=" Enter Semester" value="" required><br>
        <label>Year:</label>
        <b><input type="text" name="year" class="form-control" placeholder=" Enter Year" value="" required><br><br>
        
        <input class="btn-btn-primary" id="upload" type="submit" name="submit" value="Upload">
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {

          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;
          $name=$_POST['notes'];
         $sem=$_POST['sem'];
         $year=$_POST['year'];
        


          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO pdf_file values('$pdf','$name','$sem','$year')";
          $query=mysqli_query($conn,$sql);



        }



         ?>

      </form>
      </form>

    </div>

          </div>
        </div>
        
      </div>
      
    </div>

    </div>


  </body>
</html>
