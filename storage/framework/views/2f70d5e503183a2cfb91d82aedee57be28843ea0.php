<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg"><?php echo e(__('Register')); ?></p>

        <form action="<?php echo e(route('useradd')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="input-group mb-3">
                <input id="name" type="text" class="form-control <?php if ($errors->has('id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                       placeholder="id" name="id" value="<?php echo e(old('id')); ?>" required autocomplete="id"
                       autofocus>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>
            <?php if ($errors->has('id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                    placeholder="Full name" name="nama" value="<?php echo e(old('name')); ?>" required autocomplete="name"
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
                <input id="email" type="text" class="form-control <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="alamat"
                       value="<?php echo e(old('alamat')); ?>" placeholder="alamat" required autocomplete="alamat">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            <?php if ($errors->has('alamat')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('alamat'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control <?php if ($errors->has('kota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kota'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="kota"
                       value="<?php echo e(old('kota')); ?>" placeholder="kota" required autocomplete="kota">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            <?php if ($errors->has('kota')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kota'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="email" type="date" class="form-control <?php if ($errors->has('tlahir')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tlahir'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="tlahir"
                       value="<?php echo e(old('tlahir')); ?>" placeholder="tlahir" required autocomplete="tlahir">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            <?php if ($errors->has('tlahir')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tlahir'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <select class="form-select <?php if ($errors->has('kelamin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kelamin'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="kelamin" aria-label="Default select example">
                    <option value="1">Pria</option>
                    <option value="2">Wanita</option>
                </select>
            </div>
            <?php if ($errors->has('kelamin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kelamin'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control <?php if ($errors->has('telepon')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telepon'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="telepon"
                       value="<?php echo e(old('telepon')); ?>" placeholder="telepon" required autocomplete="telepon">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            <?php if ($errors->has('telepon')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telepon'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control <?php if ($errors->has('agama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('agama'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="agama"
                       value="<?php echo e(old('agama')); ?>" placeholder="agama" required autocomplete="agama">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            <?php if ($errors->has('agama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('agama'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

            <div class="input-group mb-3">


                <select class="form-select <?php if ($errors->has('role')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('role'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="role" aria-label="Default select example">
                    <option value="1">Mahasiswa</option>
                    <option value="2">Prodi</option>
                </select>
            </div>
            <?php if ($errors->has('role')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('role'); ?>
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

            <div class="row">
                <div class="col-4 offset-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Register')); ?></button>
                </div>
                <!-- /.col -->
            </div>
        </form>







    </div>
    <!-- /.login-card-body -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/prodi/register.blade.php ENDPATH**/ ?>