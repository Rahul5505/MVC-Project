<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<style>
    .td-booked{
        background-color: #FFFF00 !important;
        color: darkred !important;
    }
</style>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Manage Parking Slot</h1>


          <table class="table table-bordered">
          <tr align="center" class="bg-dark text-white">
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
            <th>
              Action
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
            <td>  
                <div style="min-width:100px">
 <a href="<?php echo $mainurl; ?>editslot?editid=<?php echo $row["id"]; ?>"><span class="fa fa-edit btn btn-primary bg-primary text-white"></span></a>
</div>
                </td>
           </tr>
<?php
        }

        ?>
        
          </table>
        </div>
</main>
</div>
</div>
