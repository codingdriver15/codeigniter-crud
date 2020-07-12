<!DOCTYPE html>
<html>
<head>
    <title>Basic Crud operation in Codeigniter 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Codeigniter 3 CRUD Example from scratch with <a href="https://codingdriver.com/">Coding Driver</a></h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-success" href="/task/create"> Create New Item</a>
          </div>
      </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th width="220px">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($tasks as $task) { ?>
            <tr>
                <td><?php echo $task->title; ?></td>
                <td><?php echo $task->description; ?></td>
            <td>
              <form method="DELETE" action="<?php echo base_url('task/delete/'.$task->id);?>">
                <a class="btn btn-info" href="<?php echo base_url('task/show/'.$task->id) ?>"> show</a>
               <a class="btn btn-primary" href="<?php echo base_url('task/edit/'.$task->id) ?>"> Edit</a>
                <button type="submit" class="btn btn-danger"> Delete</button>
              </form>
            </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  </div>
</body>
</html>
