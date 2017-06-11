<div class="container">
  <div class="row">

    <h1><a href="<?php echo site_url('dashboard/index'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i></a> <?php if (isset($title)) echo $title; ?></h1>

    <?php if(!empty($this->session->flashdata('user_registered'))): echo "<p class='alert alert-success alert-dismissable fade in'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" . $this->session->flashdata('user_registered'); ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_edited')): echo "<p class='alert alert-success alert-dismissable fade in'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" . $this->session->flashdata('user_edited'); ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_deleted')): echo "<p class='alert alert-success alert-dismissable fade in'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" . $this->session->flashdata('user_deleted'); ?>
    <?php endif; ?>

  </div>

  <div class="row">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-condensed">
        <thead>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Options</th>
        </thead>
        <tbody>
        <?php
          foreach ($results as $object) {
              echo "<tr>";
              echo "<td>" . $object->id . "</td>";
              echo "<td>" . $object->first_name . "</td>";
              echo "<td>" . $object->last_name . "</td>";
              echo "<td>" . $object->email . "</td>";
              echo "<td class='optionbuttons'><a class='btn btn-warning' href='" . site_url('users/edit/' . $object->id) . "'><i class='fa fa-edit'></i> Edit</a> <a class='btn btn-danger' href='" . site_url('users/delete/' . $object->id) ."'><i class='fa fa-trash'></i> Delete</a></td>";
              echo "</tr>";
          }
        ?>
        </tbody>
      </table>
    </div>
  </div>

  <a href="<?php echo site_url('users/add'); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New User</a>
  <div class="clearfix"></div>
