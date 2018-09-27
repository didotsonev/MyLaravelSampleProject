<?php echo csrf_field(); ?>
<?php if(isset($employee)): ?>
    <input type="hidden" name="_method" value="PUT">
<?php endif; ?>
<input type="hidden" name="company_id" id="employeeCompanyId">
<div class="form-group">
    <label for="employeeFirstName"><?php echo e(_i("First name")); ?></label><span style="color:red;">*</span>
    <input class="form-control" type="text" id="employeeFirstName" name="first_name" placeholder="First name" value="<?php echo e(isset($employee) ? $employee->first_name : ''); ?>">
</div>
<div class="form-group">
    <label for="employeeLastName"><?php echo e(_i("Last name")); ?></label>
    <input class="form-control" type="text" id="employeeLastName" name="last_name" placeholder="Last name" value="<?php echo e(isset($employee) ? $employee->last_name : ''); ?>">
</div>
<div class="form-group">
    <label for="employeeEmail"><?php echo e(_i("Email")); ?></label>
    <input class="form-control" type="text" id="employeeEmail" name="email" placeholder="Email" value="<?php echo e(isset($employee) ? $employee->email : ''); ?>">
</div>
<div class="form-group">
    <label for="employeePhone"><?php echo e(_i("Phone")); ?></label>
    <input class="form-control" type="text" id="employeePhone" name="phone" placeholder="Phone" value="<?php echo e(isset($employee) ? $employee->phone : ''); ?>">
</div>