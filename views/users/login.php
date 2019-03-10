<div class="card" style="width: auto">
  <div class="card-body">
    <h3 class="card-title">User Login</h3>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
    </form>
  </div>
</div>