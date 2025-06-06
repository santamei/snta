<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Form Register</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h2>Form Pendaftaran</h2>

                <?php if ($this->session->flashdata('success')): ?>
                <p style="color:green;"><?= $this->session->flashdata('success'); ?></p>
                <?php endif; ?>

                <?php if ($this->session->flashdata('error')): ?>
                <p style="color:red;"><?= $this->session->flashdata('error'); ?></p>
                <?php endif; ?>

                <?= validation_errors('<p style="color:red;">','</p>'); ?>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" tittle="Collapse">
                        <i class="fas fa-minus"></i>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" tittle="Collapse">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                <form action="<?php echo base_url(). "auth/process_register";?>" method="POST">
                    <div class="box-body">
                <div class="form-group">
                            <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                            <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="passsword" placeholder="Password" required>
                </div>
                <div class="form-group">
                            <label for="konfirmasi">Konfirmasi Password</label>
                    <input type="text" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirm_password" required>
                </div>
                <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" name="role" required>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                    </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
                </div>
                    

                <div class="card-footer">
                                        
                                        </div>
                                    </div>
                                </section>
                            </div>