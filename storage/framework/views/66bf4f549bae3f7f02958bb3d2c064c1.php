 <!-- Assuming you have an admin layout -->

<?php $__env->startSection('content'); ?>
<div style="padding: 16px;">

    <h1 style="font-size: 20px; font-weight: 600; margin-bottom: 16px;">Active Listings</h1>

    <!-- Stats Cards -->
    <div style="display: flex; gap: 12px; margin-bottom: 24px;">
        <div style="padding: 16px; background:#fff; border:1px solid #E5E7EB; border-radius:8px; box-shadow:0 1px 2px rgba(0,0,0,0.05); flex:1;">
            <p style="font-size:14px; color:#6B7280;">Total Active</p>
            <p style="font-size:18px; font-weight:600; color:#111827;"><?php echo e($listingStats['total_active']); ?></p>
        </div>
        <div style="padding: 16px; background:#fff; border:1px solid #E5E7EB; border-radius:8px; box-shadow:0 1px 2px rgba(0,0,0,0.05); flex:1;">
            <p style="font-size:14px; color:#6B7280;">Expired</p>
            <p style="font-size:18px; font-weight:600; color:#111827;"><?php echo e($listingStats['expired']); ?></p>
        </div>
        <div style="padding: 16px; background:#fff; border:1px solid #E5E7EB; border-radius:8px; box-shadow:0 1px 2px rgba(0,0,0,0.05); flex:1;">
            <p style="font-size:14px; color:#6B7280;">Sold</p>
            <p style="font-size:18px; font-weight:600; color:#111827;"><?php echo e($listingStats['sold']); ?></p>
        </div>
    </div>

    <!-- Listings Table -->
    <div style="background:#fff; border:1px solid #E5E7EB; border-radius:8px; overflow:hidden;">
        <div style="padding: 16px; border-bottom:1px solid #E5E7EB; display:flex; justify-content:space-between; align-items:center;">
            <h2 style="font-size:16px; font-weight:600; color:#111827;">All Listings</h2>
            <div style="display:flex; gap:12px; align-items:center;">
                <input type="text" placeholder="Search listings..." 
                       style="padding:8px 12px; border:1px solid #D1D5DB; border-radius:8px; outline:none; width:220px; font-size:14px; box-shadow:0 1px 2px rgba(0,0,0,0.05);"
                       onfocus="this.style.borderColor='#3B82F6'; this.style.boxShadow='0 0 0 2px rgba(59,130,246,0.3)';" 
                       onblur="this.style.borderColor='#D1D5DB'; this.style.boxShadow='0 1px 2px rgba(0,0,0,0.05)';">
                <select style="padding:8px 12px; border:1px solid #D1D5DB; border-radius:8px; outline:none; font-size:14px; width:150px; cursor:pointer; background:#fff; box-shadow:0 1px 2px rgba(0,0,0,0.05); appearance:none;">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="expired">Expired</option>
                    <option value="sold">Sold</option>
                </select>
            </div>
        </div>

        <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse; font-size:14px;">
                <thead>
                    <tr style="background:#F9FAFB; border-bottom:1px solid #E5E7EB;">
                        <th style="padding:12px; text-align:left;">ID</th>
                        <th style="padding:12px; text-align:left;">Seller ID</th>
                        <th style="padding:12px; text-align:left;">Listing Method</th>
                        <th style="padding:12px; text-align:left;">Major Category</th>
                        <th style="padding:12px; text-align:left;">Make</th>
                        <th style="padding:12px; text-align:left;">Model</th>
                        <th style="padding:12px; text-align:left;">Price</th>
                        <th style="padding:12px; text-align:left;">Status</th>
                        <th style="padding:12px; text-align:left;">Listing State</th>
                        <th style="padding:12px; text-align:left;">Expiry Status</th>
                        <th style="padding:12px; text-align:left;">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $activeListings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="border-bottom:1px solid #E5E7EB;">
                        <td style="padding:12px;"><?php echo e($listing->id); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->seller_id); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->listing_method); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->major_category); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->make); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->model); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->price); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->status); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->listing_state); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->expiry_status); ?></td>
                        <td style="padding:12px;"><?php echo e($listing->created_at->format('Y-m-d H:i')); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div style="padding:16px; display:flex; justify-content:flex-end;">
            <?php echo e($activeListings->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/admin/ActiveListing.blade.php ENDPATH**/ ?>