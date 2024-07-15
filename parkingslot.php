<style>
    .td-booked{
        background-color: #FFFF00 !important;
        color: darkred !important;
    }
</style>


<div id="services" class="our-services section">
    <div class="container">
            <h3 class="text-primary">White-Empty Slot, Yellow-Book Slot</h3>
        <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <h4 class="text-white p-2 bg-primary">Parking Slot</h4>
          <table class="table table-bordered">
          <tr align="center" class="bg-primary text-white">
            <th>
              Rajkot
            </th>
            <th>
              Ahemdabad
            </th>
            <th>
              Surat
            </th>
            <th>
              Vadodara
            </th>
          </tr>
          <?php
                foreach($slot as $row)
                {
?>                  
          <tr align="center">
           
           <td id="" class="<?php echo ($row["Rajkot"] == "booked")?"td-booked":""; ?>">
               <?php  echo $row["Rajkot"]; ?>
           </td>   
               <td id="" class="<?php echo ($row["Ahemdabad"] == "booked")?"td-booked":""; ?>">
               <?php  echo $row["Ahemdabad"]; ?>
               </td>
               <td id="" class="<?php echo ($row["Surat"] == "booked")?"td-booked":""; ?>">
               <?php  echo $row["Surat"]; ?>
               </td>
               <td id="" class="<?php echo ($row["Vadodara"] == "booked")?"td-booked":""; ?>">
               <?php  echo $row["Vadodara"]; ?>
               </td>
           </tr>
<?php
        }

        ?>
        
          </table>
        </div>
    </div>
  </div>
