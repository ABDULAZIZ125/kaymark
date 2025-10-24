<?php
    $role = strtolower(Auth::user()->role ?? '');
?>

<?php if($role === 'admin'): ?>
    <script>window.location="<?php echo e(route('dashboard.admin')); ?>";</script>
<?php elseif($role === 'seller'): ?>
    <script>window.location="<?php echo e(route('dashboard.seller')); ?>";</script>
<?php elseif($role === 'buyer'): ?>
 
        <script>window.location="<?php echo e(route('dashboard.buyer')); ?>";</script>

<?php endif; ?>
<?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/dashboard.blade.php ENDPATH**/ ?>