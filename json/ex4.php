<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <!-- Button trigger modal -->

<!-- Modal -->

<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!---->
  <form  data-toggle="validator"action="create.php" method="post">
      <div class="modal-body">
          <div class="form-group">
            <lable calss="control-label" for="title">Title</lable>
            <input type="text" name="item" class="form-control" data-error="Please ente title" required>
            <div class="help-block with-errors">
            </div>
          </div>
          <div class="form-group">
            <lable calss="control-label" for="descirption">Title</lable>
            <textarea name="descirption" class="form-control" data-error="Please ente title" rows="8" cols="40" required></textarea>
            <div class="help-block with-errors">
            </div>
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="save" class="btn btn-primary">Save changes</button>
      </div>
     </form>
    </div>
  </div>
</div>

    <div class="container">
      <div class="row">
        <div class="col-lg12 margin-tb">
          <div class="pull-left">
            <h2>PHP JQuery Ajex CRUD Example</h2>
          </div>
          <div class="pull-left">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Create Item</div>
        </div>
      </div>
    </div>
    <!---->
    <table class="table table-bordered">
      <thead>
          <tr>
            <th>Title</th>
            <th>description</th>
            <th width="200">Action</th>
          </tr>
      </thead>
        <tbody></tbody>
  </table>
<script src="js2/jquery-3.3.1.min.js"></script>
<script src="js2/popper.min.js"></script>
<script src="js2/bootstrap.min.js"></script>
<script src="item_ajex.js"></script>
  </body>
</html>
