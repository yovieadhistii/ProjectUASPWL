<?php $__env->startSection('addCss'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/editprofile.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Starter</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
					<li class="breadcrumb-item active">Starter</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <?php if($user->foto): ?>
                                <img class="img-account-profile rounded-circle mb-2" src="<?php echo e(asset('storage/'.$user->foto)); ?>" alt="">
                            <?php else: ?>
                                <img class="img-account-profile rounded-circle mb-2" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="">
                            <?php endif; ?>

                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <a href="<?php echo e(route('deleteProfilePhoto', ['id' => $user->id])); ?>" class="btn btn-primary"> Delete Image </a>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#upload">Upload new image</button>

                        </div>
                    </div>

                    <!-- Modal-->
                    <div class="modal" tabindex="-1" role="dialog" id="upload">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form enctype="multipart/form-data" action="<?php echo e(route('updateProfilePhoto', ['id' => $user->id])); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                <div class="modal-body">

                                        <label for="image" class="form-label">Default file input example</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <input type="hidden" name="oldImage" value="<?php echo e($user->foto); ?>">
                                        <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Profile Details</div>
                        <div class="card-body">
                            <form action="<?php echo e(route('updateProfile', ['id' => $user->id])); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="nama">Nama</label>
                                    <input class="form-control" id="nama"  name="nama" type="text" placeholder="Enter your username" value="<?php echo e($user->nama); ?>">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Kota</label>
                                        <input class="form-control" id="inputFirstName"  name="kota" type="text" placeholder="Enter your first name" value="<?php echo e($user->kota); ?>">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Agama</label>
                                        <input class="form-control" id="inputLastName" name="agama" type="text" placeholder="Enter your last name" value="<?php echo e($user->agama); ?>">
                                    </div>
                                </div>
                                <!-- Form Row        -->
                                <div class="mb-3">
                                    <!-- Form Group (organization name)-->
                                        <label class="small mb-1" for="inputLocation">Alamat</label>
                                        <input class="form-control" id="inputLocation" name="alamat" type="text" placeholder="Enter your location" value="<?php echo e($user->alamat); ?>">
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter your email address" value="<?php echo e($user->email); ?>">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="phone">Telepon</label>
                                        <input class="form-control" id="phone" name="telepon" type="tel" placeholder="Enter your phone number" value="<?php echo e($user->telepon); ?>">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputBirthday">Tanggal Lahir</label>
                                        <input class="form-control" id="inputBirthday" name="tlahir" type="text" name="birthday" placeholder="Enter your birthday" value="<?php echo e($user->tanggal_lahir); ?>">
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
    <script>
        function previewImage(){
            const image=document.querySelector('#image');
            const imgPreview  = document.querySelector('.img-preview');
            imgPreview.style.display='block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload=function (oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUASPWLfix\resources\views/mahasiswa/editprofil.blade.php ENDPATH**/ ?>