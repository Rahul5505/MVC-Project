<?php
  error_reporting(0);

?>

<div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="assets/images/parkingslot.webp" alt="" style="border-radius: 50px;">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">  
        <h4 class="text-dark">Search Parking Slot</h4><br>
        <form method="get">
            <input type="text" name="search" class="form-control" placeholder="Search parking Area/City/State"><br><input type="submit" name="submit" value="Search" class="btn btn-lg bg-dark text-white">
        </form>
        <br>
        <br>
        <table width="100%">
        <tr align="center">
          <td>
  <h3>
  <a href="<?php echo $mainurl; ?>bookslot">
<?php if($shw)
            { ?>

  <div class="alert alert-success">
<?php
            if(isset($_SESSION['id']))
            {
              foreach($shw as $row)
              {
                
                      echo $row['Area']."&nbsp;".$row['City']."&nbsp;".$row['State']."<br>";
              }
            }
            else
            {
                echo "<h5>please login first after you can book slot.</h5>";

            }
                  ?>
</div>
<?php }?>
<?php 

if(!$shw)
  {?>
<div class="alert alert-danger">
 <?php
    
          echo "<h3>Not Match Found.. Try Again</h3>";

       
   
    ?>                   
</div>
<?php }?>
</a>
</h3>                   

                  

          </td>
        </tr>

      </table>

        </div>
      </div>
      
    </div>
  </div>
