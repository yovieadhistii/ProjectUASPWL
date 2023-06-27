<?php $__env->startSection('content'); ?>
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?php echo e(__('Login')); ?></p>

        <form action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                    value="<?php echo e(old('email')); ?>" placeholder="Email" required autocomplete="email" autofocus>
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
                    placeholder="Password" name="password" required autocomplete="current-password">
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

            <div class="row">
                <div class="col-8">
                    
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Login')); ?></button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <hr>

        <?php if(Route::has('password.request')): ?>
        <p class="mb-0">
            <a href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Lupa Password?')); ?></a>
        </p>
        <?php endif; ?>
        <?php if(Route::has('register')): ?>
        <p class="mb-0">
            <a href="<?php echo e(route('register')); ?>" class="text-center"><?php echo e(__('Belum punya akun? Daftar sekarang')); ?></a>
        </p>
        <?php endif; ?>
    </div>
    <!-- /.login-card-body -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWL\resources\views/auth/login.blade.php ENDPATH**/ ?>