<h2 class="title1"> ADD  BLOG CATEGORY </h2>
<div class="blank-page widget-shadow scroll" id="style-2 div1">
  <?php
  $message='';
  if (isset($_POST['add_asrto'])) {
    if (add_blog_cat($_POST['yantra_name'])) {
      $message = "<div class='alert alert-success'>  BLOG CATEGORY " .$_POST['yantra_name'] . "  added </div>";
    }else {
      $message = "<div class='alert alert-danger'>  BLOG CATEGORY Is Not Added </div>";
    }
  }
   ?>
  <form method="post" action="" enctype="application/x-www-form-urlencoded">
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <fieldset class="form-group">
        <label for="">Category  Name</label>
        <input type="text" class="form-control" id="" placeholder="Enter Category Name" name="yantra_name">
      </fieldset>
      <button type="submit" class="btn btn-primary" name="add_asrto">Add  Blog Category</button>
      <?php echo $message; ?>
    </div>
  </div>
</div>
  </form>
  <div class="tables">
    <div class="table-responsive bs-example widget-shadow">
      <h4>Blog Category List:</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>CATEGORY NAME</th>
          </tr>
        </thead>
        <tbody>
    <?php category_list(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
