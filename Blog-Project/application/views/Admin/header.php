<?=link_tag("Assests/CSS/bootstrap.min.css")?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   <?php 
    if($this->session->userdata('id'))
    {

      ?>
      <li><a href="<?= base_url('Admin/logout'); ?>" class="btn btn-danger">LOGOUT</a></li>
    }

<?php
}
   ?>

   <!--<? =anchor("Admin/logout","logout");?>  -->
  
    </div>
  </div>
</nav>
