<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title"><?php echo e(_i('Company info')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <table class="w-100">
            <tr>
                <td class="text-center">
                    <img src="<?php echo e($company->logo_path); ?>" alt="Company logo" height="100" width="100">
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <h3><?php echo e($company->name); ?></h3>
                </td>
            </tr>
            <tr>
                <td class="text-center"><?php echo e(_i("Email")); ?>: <?php echo $company->email ? "<a>$company->email</a>" : "N/A"; ?></td>
            </tr>
            <tr class="text-center">
                <td><?php echo e(_i("Website")); ?>: <?php echo $company->website ? "<a href='$company->website' target='_blank'>$company->website</a>" : "N/A"; ?></td>
            </tr>
            <tr class="text-center">
                <td>
                    <?php echo e(_i("Employees")); ?>:<br/>
                    <?php $__empty_1 = true; $__currentLoopData = $company->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <button type="button" class="btn btn-link" onclick="showEmployee('<?php echo e($company->id); ?>', '<?php echo e($employee->id); ?>');"><?php echo e($employee->first_name. " " .$employee->last_name); ?></button><br/>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <i><?php echo e(_i("No employees")); ?></i><br/>
                    <?php endif; ?>
                    <button type="button" class="btn btn-link" onclick="createEmployee('<?php echo e($company->id); ?>');">- <?php echo e(_i("Create new employee")); ?> -</button>
                </td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light btn-sm w-100" onclick="editCompany('<?php echo e($company->id); ?>');"><?php echo e(_i("Edit")); ?></button>
        <button type="button" class="btn btn-danger btn-sm w-100" onclick="deleteCompany('<?php echo e($company->id); ?>');"><?php echo e(_i("Delete")); ?></button>
    </div>
</div>