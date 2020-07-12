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
                <h2>Create Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo base_url('task')?>"> Back</a>
            </div>
        </div>
    </div>
    <form method="post" action="<?php echo base_url('task/store')?>">
      <?php
        // if ($this->session->flashdata('errors')){
        //     echo '<div class="alert alert-danger">';
        //     echo $this->session->flashdata('errors');
        //     echo "</div>";
        // }
      ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control">
                    <?php
                      if (isset($this->session->flashdata('errors')['title'])){
                          echo '<div class="alert alert-danger mt-2">';
                          echo $this->session->flashdata('errors')['title'];
                          echo "</div>";
                      }
                    ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" class="form-control"></textarea>
                    <?php
                      if (isset($this->session->flashdata('errors')['description'])){
                          echo '<div class="alert alert-danger mt-2">';
                          echo $this->session->flashdata('errors')['description'];
                          echo "</div>";
                      }
                    ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

  </div>
</body>
</html>
