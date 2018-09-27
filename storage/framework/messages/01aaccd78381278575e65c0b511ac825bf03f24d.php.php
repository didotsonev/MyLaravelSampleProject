<table id="companiesDataTable" class="table table-bordered">
    <thead>
        <tr>
            <th><?php echo e(_i("Name")); ?></th>
            <th><?php echo e(_i("Email")); ?></th>
            <th><?php echo e(_i("Website")); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php echo $__env->make('companies.t_body', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </tbody>
</table>