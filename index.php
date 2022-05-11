<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">

  <div class="row">
    <div class="col-md-4">
      <div class="card card-body">
        <form action="search_boss.php" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control"
            placeholder="Boss Name" autofocus>
          </div>
          <input type="submit" class="btn btn-success btn-block"
          name="search_boss" value="Search">
        </form>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php") ?>
