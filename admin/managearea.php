<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Manage All Customer</h1>

<div class="card mb-4 mt-4">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Manage All Customer
</div>
<div class="card-body">
<table id="datatablesSimple" width="100%">
<thead>
<tr>
<th>#</th>
<th>Area ID</th>
<th>Area Name</th>
<th>City</th>
<th>State</th>

<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>#</th>
<th>Area ID</th>
<th>Area Name</th>
<th>City</th>
<th>State</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>
<?php 
foreach($shw as $row)
{
?>
<tr align="center">
<td></td>
    
<td><?php echo ucwords($row["id"]);?></td>
<td><?php echo ucwords($row["Area"]);?></td>
<td><?php echo ucwords($row["City"]);?></td>
<td><?php echo ucwords($row["State"]);?></td>
<td>
<div style="min-width:100px">
<a href=""><span class="fa fa-trash btn btn-danger bg-danger text-white"></span></a> | <a href=""><span class="fa fa-edit btn btn-primary bg-primary text-white"></span></a></td>
</div>
</tr>
<?php 
}
?>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>