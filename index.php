<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">

  <div class="row">

    <div class="col-md-4">

      <?php if(isset($_SESSION["message"])){ ?>
        <div class="alert alert-<?= $_SESSION['message-type'];?>
        alert-dismissible fade show" role="alert">
        <?= $_SESSION["message"] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php session_unset();} ?>

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
    <div class="col-md-8">

        <table class="table tablebordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
    </div>
  </div>
</div>

<?php include("includes/footer.php") ?>
