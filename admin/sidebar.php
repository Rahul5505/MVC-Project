<div id="layoutSidenav">
<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
<div class="sb-sidenav-menu">
<div class="nav">
<div class="sb-sidenav-menu-heading">RK parking Admin</div>
<a class="nav-link" href="<?php echo $mainurl;?>dashboard">
<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
Admin Dashboard
</a>
<div class="sb-sidenav-menu-heading">Admin Sidebar</div>
<a class="nav-link" href="<?php echo $mainurl;?>managecustomer">
<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
Manage Customers
</a>

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
Add Area City State
<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="<?php echo $mainurl;?>addarea">Add Area</a>
<a class="nav-link" href="<?php echo $mainurl;?>managearea">Manage Area</a>
</nav>
</div>
<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
Manage Slot
<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="<?php echo $mainurl;?>slot">Add Slot</a>
<a class="nav-link" href="<?php echo $mainurl;?>viewslot">Manage Slot</a>

</nav>
</div>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
</div>
</div>
</div>
<div class="sb-sidenav-footer">
<div class="small"><a class="nav-link" href="<?php echo $mainurl; ?>?logout-here">Logout here</a> <span class="fa fa-power-off"></span></div>
</div>
</nav>
</div>
