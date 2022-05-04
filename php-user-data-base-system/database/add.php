<?php
  require_once 'functions.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <title>PHP Crud</title>
  </head>
  <body>

  <div class="con">
    <form class="add" action="functions.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="place">
        <label>Employee ID</label>
        <input type="text" name="employeeid" class="form-control"
        value="<?php echo $employeeid; ?>" placeholder="Employee ID">
      </div>
      <div class="place">
        <label>Full name</label>
        <input type="text" name="fullname" class="form-control"
         value="<?php echo $fullname; ?>" placeholder="Full name">
      </div>
      <div class="place">
        <label>Position(Job)</label>
        <input type="text" name="position" class="form-control"
        value="<?php echo $position; ?>" placeholder="Position(Job)">
      </div>
      <div class="place">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control"
        value="<?php echo $email; ?>" placeholder="mail">
      </div>
      <div class="place">
        <label>Phone number (eg. +48 798 123 465)</label>
        <input type="text" name="phonenumber" class="form-control"
        value="<?php echo $phonenumber; ?>" placeholder="Phone number">
      </div>
      <div class="place">
        <?php
        if($update == true):
         ?>
          <button type="submit" name="update">Update</button>
        <?php else: ?>
          <button type="submit" name="save">Save</button>
        <?php endif; ?>
      </div>
    </form>
  </div>

  </body>
</html>
