<div class="form-group <?php echo e($errors->has('user_id') ? 'has-error' : ''); ?>">
    <?php echo Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('user_id', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('user_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <?php echo Form::label('title', 'Title', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('body') ? 'has-error' : ''); ?>">
    <?php echo Form::label('body', 'Body', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

        <?php echo $errors->first('body', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <?php echo Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']); ?>

    </div>
</div>
