<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(_i('Companies')); ?></div>

                    <div class="card-body">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createCompanyModal"><?php echo e(_i('Create new company')); ?></button>

                        <?php echo $__env->make('companies.table', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createCompanyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create new company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createCompanyForm">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="companyName">Company name</label><span style="color:red;">*</span>
                            <input class="form-control" type="text" id="companyName" name="name" placeholder="Comapny name">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email address</label>
                            <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website" placeholder="Enter website">
                        </div>
                        <div class="form-group">
                            <label for="companyLogo">Logo</label>
                            <input type="file" class="form-control-file" id="companyLogo" name="logo">
                        </div>
                    </form>
                    <div id="createCompanyError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="createCompany();">Create</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>