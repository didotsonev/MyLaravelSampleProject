<?php if($company->wasRecentlyCreated): ?>
    <tr id="company_<?php echo e($company->id); ?>" class="clickable_row highlight" onclick="showCompany('<?php echo e($company->id); ?>');">
        <?php echo $__env->make('companies.t_data', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </tr>
<?php else: ?>
    <?php echo $__env->make('companies.t_data', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>