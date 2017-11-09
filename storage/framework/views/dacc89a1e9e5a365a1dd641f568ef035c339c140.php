<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Post <?php echo e($post->id); ?></div>
                    <div class="panel-body">

                        <a href="<?php echo e(url('/admin/posts')); ?>" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/admin/posts/' . $post->id . '/edit')); ?>" title="Edit Post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/posts', $post->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Post',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                      <th>Author</th>
                                        <td><a href="<?php echo e(url('users/'.$post->user->id)); ?>">
                                          <?php echo e($post->user->name); ?>

                                          </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ID</th><td><?php echo e($post->id); ?></td>
                                    </tr>
                                    <tr><th> User Id </th><td> <?php echo e($post->user_id); ?> </td></tr><tr><th> Title </th><td> <?php echo e($post->title); ?> </td></tr><tr><th> Body </th><td> <?php echo e($post->body); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>