<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>pdf</title>
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-info">
              <center><h4 class="text-white" style="font-family: arial;">STUDY MATERIALS</h4></center>
            </div>
            <div class="card-body">
            <?php
            $conn=mysqli_connect("localhost","root","","imgpdf");
            $query= "SELECT * FROM user";
            $query_run= mysqli_query($conn,$query);
            ?>
<table class="table">
                <thead>
                  <tr>
                    <th>COVER</th>
                    <th>BOOK</th>
                    <th>AUTHOR</th>
                    <th>SEMESTER</th>
                    <th>YEAR</th>
                    <th>READ</th>
                  </tr>
                  
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $row)
                  {
                  ?>
                  <tr>
                  <td><?php echo $row['image'];?></td>
                  <td><?php echo $row['book'];?></td>
                  <td><?php echo $row['author'];?></td>
                  <td><?php echo $row['sem'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td>
                  <a href="">READ</a>
                  </td>

                  }

                }
                else{
                  ?>
                  <tr>
                  <td>no record</td>
                  </tr>



                  <?php
                }
                ?>
                  <tr>
                    <td>ir</td>
                  </tr>
                  
                </tbody>
                
              </table>
              
            </div>

              
      </div>
    </div>
  </div>
</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

