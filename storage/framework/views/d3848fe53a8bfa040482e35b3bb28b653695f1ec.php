<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?php echo e(__('Register')); ?></p>

        <form action="<?php echo e(route('register')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="input-group mb-3">
                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                    placeholder="Full name" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name"
                    autofocus>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>
            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                    value="<?php echo e(old('email')); ?>" placeholder="Email" required autocomplete="email">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                    placeholder="Password" name="password" required autocomplete="new-password">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-lock"></span>
                </div>
            </div>
            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" placeholder="Retype password"
                    name="password_confirmation" required autocomplete="new-password">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-lock"></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <input id="telp" type="text" class="form-control" placeholder="Telepon"
                       name="telp" required autocomplete="telepon">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-phone"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-4 offset-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Register')); ?></button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <?php if(Route::has('login')): ?>
        <hr>
        <p class="mb-0 text-center">
            <a href="<?php echo e(route('login')); ?>" class="text-center"><?php echo e(__('Sudah punya akun? Login sekarang')); ?></a>
        </p>
        <?php endif; ?>
    </div>
    <!-- /.login-card-body -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWL\resources\views/auth/register.blade.php ENDPATH**/ ?>