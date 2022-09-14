<?php echo $__env->make('incl.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
        <div class="row">
                <legend>Legend</legend>
                <?php if(session('info')): ?>
                <div class="alert alert-success">
                <?php echo e(session('info')); ?>

                </div>
                <?php endif; ?>
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Task</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                                <?php if(count($articles)>0): ?>
                                <?php foreach($articles ->all() as $article): ?>
                          <tr >
                          <td><?php echo e($article->Id); ?></td>
                          <td><?php echo e($article->Task); ?></td>
                          <td><?php echo e($article->Description); ?></td>
                            <td>
                              <a href='<?php echo e(url("/read/{$article->Id}")); ?>'   button type="button" class="btn btn-primary">Read</a>
                            
                            <a href='<?php echo e(url("/update/{$article->Id}")); ?>'   button type="button" class="btn btn-success">Update </a>

                             <a href='<?php echo e(url("/delete/{$article->Id}")); ?>'  button type="button" class="btn btn-danger">Delete </a> 
                            
                            </td>
                          </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </tbody>
                      </table> 
        </div>
 </div>
        
<?php echo $__env->make('incl.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>