<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Manage All Book Slot</h1>

<div class="card mb-4 mt-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Manage All Book Slot
</div>
<div class="card-body">
<table class="table table-hover" width="100%">
<thead>
<tr>

<th>BookID</th>
<th>User ID</th>
                                            <th>Username</th>
                                            
                                            <th>Area</th>
                                            <th>Slot</th>
                                            <th>Mobile</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th>Action</th>
</tr>
</thead>
<tbody>
<?php
                                                 
                                                 
                                                
                                                 foreach($viewslot as $row1)
                                                  {


                                                    ?>
                                        <tr>
                                            <td>
                                                  <?php echo $row1["book_id"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["user_id"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["username"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["area"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["slot"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["mobile"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["start_date"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["end_date"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["rate"];?>      
                                            </td>
                                            <td>
                                                  <?php echo $row1["status"];?>      
                                            </td>
                                            <td>
                                            <div style="min-width:100px">
<a href="<?php echo $mainurl;?>dashboard?deleteid=<?php echo $row1['book_id'];?>"><span class="fa fa-trash btn btn-danger bg-danger text-white"></span></a></td>
</div>
                                            </td>
                                        </tr>                
                                                  <?php  
                                                  }  
                                                ?></tbody>
</table>
</div>
</div>
</div>

</div>
</div>
