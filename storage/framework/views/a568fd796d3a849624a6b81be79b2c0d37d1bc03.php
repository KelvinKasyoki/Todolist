<!DOCTYPE html>
<html>
    <head>
        <title>Laravel todolist application </title>
        <link  rel="stylesheet" type="text/css" href="<?php echo e(url('css/bootstrap.css')); ?>">
        <link  rel="stylesheet" type="text/css" href="<?php echo e(url('css/style.css')); ?>">
        <script type="text/javascript" src="<?php echo e(url('js/jQuery 3.3.1.js')); ?>"> </script>
        <script type="text/javascript" src="<?php echo e(url('js/bootstrap.js')); ?>"> </script>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"> TODOLIST APPLICATION</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            
  <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e('/'); ?>">Home</a>
                 </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e('/create'); ?>">create</a>
          </li>
         
        </ul>
        
      </div>
          </nav>
        
