<nav class="navbar navbar-expand-md navbar-dark  bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ">

      <li class="<?php echo e(Request::is('/') ? 'active' :''); ?> " >
        <a  class="nav-link" href="/"> Home </a>
      </li>

      <li class="<?php echo e(Request::is('/todo/create') ? 'active' : ''); ?> ">
        <a class="nav-link " href="/todo/create">Create</a>
      </li>
    
    </ul>

  </div>
</nav><?php /**PATH C:\xampp\htdocs\todolist\resources\views/inc/navbar.blade.php ENDPATH**/ ?>