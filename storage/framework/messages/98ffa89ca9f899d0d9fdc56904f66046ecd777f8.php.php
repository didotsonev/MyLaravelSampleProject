<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title"><?php echo e(_i('Employee info')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <table class="w-100">
            <tr>
                <td class="text-center"><?php echo e(_i("First name")); ?>: <?php echo e($employee->first_name); ?></td>
            </tr>
            <tr>
                <td class="text-center"><?php echo e(_i("Last name")); ?>: <?php echo e($employee->last_name); ?></td>
            </tr>
            <tr>
                <td class="text-center"><?php echo e(_i("Email")); ?>: <?php echo $employee->email ? "<a>$employee->email</a>" : "N/A"; ?></td>
            </tr>
            <tr>
                <td class="text-center"><?php echo e(_i("Phone")); ?>: <?php echo e($employee->phone); ?></td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light btn-sm w-100" onclick="editEmployee('<?php echo e($company->id); ?>', '<?php echo e($employee->id); ?>');"><?php echo e(_i("Edit")); ?></button>
        <button type="button" class="btn btn-danger btn-sm w-100" onclick="deleteEmployee('<?php echo e($company->id); ?>', '<?php echo e($employee->id); ?>');"><?php echo e(_i("Delete")); ?></button>
    </div>
</div>