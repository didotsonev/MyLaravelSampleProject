<?php if($companies): ?>
    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr id="company_<?php echo e($company->id); ?>" class="clickable_row highlight" onclick="showCompany('<?php echo e($company->id); ?>');">
            <?php echo $__env->make('companies.t_row', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
