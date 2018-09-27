<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button type="button" class="btn btn-success float-right bottom-space-btn" data-toggle="modal" data-target="#createCompanyModal"><?php echo e(_i('Create new company')); ?></button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(_i('Companies')); ?></div>
                    <div class="card-body">
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
                    <h5 class="modal-title"><?php echo e(_i('Create new company')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createCompanyForm">
                        <?php echo $__env->make('companies.create_edit_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </form>
                    <div id="createCompanyError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="createCompany();"><?php echo e(_i("Create")); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCompanyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(_i('Edit company')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCompanyForm">

                    </form>
                    <div id="editCompanyError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="updateCompany" onclick=""><?php echo e(_i("Update")); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="showCompanyModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">

        </div>
    </div>

    <div class="modal fade" id="createEmployeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(_i('Create new employee')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createEmployeeForm">
                        <?php echo $__env->make('employees.create_edit_form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </form>
                    <div id="createEmployeeError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="storeEmployee();"><?php echo e(_i("Create")); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="showEmployeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">

        </div>
    </div>

    <div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(_i('Edit employee')); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editEmployeeForm">

                    </form>
                    <div id="editEmployeeError">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="updateEmployee" onclick=""><?php echo e(_i("Update")); ?></button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>