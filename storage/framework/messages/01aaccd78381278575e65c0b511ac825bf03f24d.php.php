<table id="companiesDataTable" class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php echo $__env->make('companies.t_body', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </tbody>
</table>