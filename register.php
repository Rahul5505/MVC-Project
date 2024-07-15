<div class="row container">
<div class="col-md-6">
  <img src="<?php echo $baseurl; ?>/images/register.png">
</div>
<div class=" col-md-8 w-50" style="margin-top:100px;">

<!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
 
  <li class="nav-item" role="presentation">
    <h1 class="text-dark">Register</h1>
  </li>
</ul>
<!-- Pills navs -->
      <form method="post">
      <!-- id input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="hidden" id="" name="id" value="<?php echo mt_rand(1101,10000); ?>" class="form-control" />
        <!-- <label class="form-label" for="registerName">Name</label> -->
      </div>
      <!-- Name input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="registerName" name="name" class="form-control" />
        <label class="form-label" for="registerName">Name</label>
      </div>

      <!-- Username input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="registerUsername" name="uname" class="form-control" />
        <label class="form-label" for="registerUsername">Username</label>
      </div>

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="registerEmail" name="email" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="registerPassword" name="password" class="form-control" />
        <label class="form-label" for="registerPassword">Password</label>
      </div>

      <!-- Submit button -->
      <div class="row">
        <div class="col-md-6">
        <input type="submit" name="submit" value="Sign Up" class="btn btn-lg bg-dark text-white">
        </div>
        <div class="col-md-6 text-primary">
          <a href="<?php echo $mainurl; ?>login"><h3>Login here</h3></a> 
        </div>
      </div>
      </form>
  </div>
</div>
<!-- Pills content -->
</div>