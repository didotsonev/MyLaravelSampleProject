<?php echo csrf_field(); ?>
<?php if(isset($company)): ?>
    <input type="hidden" name="_method" value="PUT">
<?php endif; ?>
<div class="form-group">
    <label for="companyName"><?php echo e(_i("Company name")); ?></label><span style="color:red;">*</span>
    <input class="form-control" type="text" id="companyName" name="name" placeholder="Comapny name" value="<?php echo e(isset($company) ? $company->name : ''); ?>">
</div>
<div class="form-group">
    <label for="emailAddress"><?php echo e(_i("Email address")); ?></label><span style="color:red;">*</span>
    <input type="email" class="form-control" id="emailAddress" name="email" placeholder="Enter email" value="<?php echo e(isset($company) ? $company->email : ''); ?>">
</div>
<div class="form-group">
    <label for="website"><?php echo e(_i("Website")); ?></label>
    <input type="text" class="form-control" id="website" name="website" placeholder="Enter website" value="<?php echo e(isset($company) ? $company->website : ''); ?>">
</div>
<div class="form-group">
    <?php if(isset($company)): ?>
        <b><?php echo e(_i("Current logo")); ?></b>: <?php echo e($company->logo ? $company->logo : _i("Missing logo")); ?><br/>
    <?php endif; ?>
    <label for="companyLogo"><?php echo e(_i("Logo (min. 100x100)")); ?></label>
    <input type="file" class="form-control-file" id="companyLogo" name="logo">
</div>