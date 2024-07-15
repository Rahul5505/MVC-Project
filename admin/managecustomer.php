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
<th>Customer ID</th>
<th>User Id</th>
<th>Customer Name</th>
<th>Email</th>

<th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>#</th>
<th>Customer ID</th>
<th>User Id</th>
<th>Customer Name</th>
<th>Email</th>
<th>Action</th>
</tr>
</tfoot>
<tbody>
<?php 
foreach($fetch as $row)
{
?>
<tr align="center">
<td></td>
    
<td><?php echo ucwords($row["id"]);?></td>
<td><?php echo ucwords($row["user_id"]);?></td>
<td><?php echo ucwords($row["name"]);?></td>
<td><?php echo ucwords($row["email"]);?></td>
<td>
<div style="min-width:100px">
<a href="<?php echo $mainurl; ?>?deletecid=<?php echo $row["id"];?>"><span class="fa fa-trash btn btn-danger bg-danger text-white"></span></a></td>
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