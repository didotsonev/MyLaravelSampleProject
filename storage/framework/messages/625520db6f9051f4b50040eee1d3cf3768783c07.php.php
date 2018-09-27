<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(_i('Verify Your Email Address')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(_i('A fresh verification link has been sent to your email address.')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(_i('Before proceeding, please check your email for a verification link.')); ?>

                    <?php echo e(_i('If you did not receive the email')); ?>, <a href="<?php echo e(route('verification.resend')); ?>"><?php echo e(_i('click here to request another')); ?></a>.
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>