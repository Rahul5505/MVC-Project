
<div id="services" class="our-services section">
    <div class="container">
        <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <table class="table table-bordered bg-light">
        <h4 class="text-white p-2 bg-danger">Manage My Parking Slot</h4>
        <?php

            foreach($shwslot as $row){
         ?>
          
          <tr>
                <td colspan="2">
                    <h3 class="text-primary">Name</h3>
                </td>
                <td colspan="2">
                    <h4 class="text-primary"><?php echo ucfirst($row["username"]); ?></h4>
                </td>
                <td rowspan="8">
                    <button class="btn btn-sm bg-danger text-white">Cancel Slot</button>
                </td>
            </tr>


            <tr>
                <td colspan="2">
                   <h3 class="text-primary">Book ID</h3>
                </td>
                <td colspan="2">
                    <h4 class="text-primary"><?php echo ucfirst($row["book_id"]); ?></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                   <h3 class="text-primary">Email</h3>
                </td>
                <td colspan="2">
                    <h4 class="text-primary"> <?php echo ucfirst($row["email"]); ?></h4>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                   <h3 class="text-primary">City</h3>
                </td>
                <td colspan="2">
                <h4 class="text-primary"><?php echo ucfirst($shwcity[0]["city_name"]); ?></h4>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                   <h3 class="text-primary">Area</h3>
                </td>
                <td colspan="2">
                <h4 class="text-primary"><?php echo ucfirst($row["area"]); ?></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                   <h3 class="text-primary">Parking Slot</h3>
                </td>
                <td colspan="2">
                    <h4 class="text-primary"><?php echo ucfirst($row["slot"]); ?></h4>
                </td>
            </tr>
            <tr align="center">
                <td>
                   <h3 class="text-primary">Start Time</h3>
                </td>
                <td>
                    <h4 class="text-primary"><?php echo ucfirst($row["start_date"]); ?></h4>

                </td>
                <td>
                    <h3 class="text-primary">End Time</h3>

                </td>
                <td>
                <h4 class="text-primary"><?php echo ucfirst($row["end_date"]); ?></h4>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <h3 class="text-primary">Charge Rs</h3>
                </td>
                <td>
                    <h4 class="text-primary">    <?php echo ucfirst($row["rate"]); ?></h4>
                </td>
                <td>
                    <h3 class="text-primary">Status</h3>
                </td>
                <td>
                    <h4 class="text-primary"><?php echo ucfirst($row["status"]); ?></h4>
                </td>
            </tr>        
                
        </table>
  <?php
            }
            ?>      
        </div>
    </div>
  </div>