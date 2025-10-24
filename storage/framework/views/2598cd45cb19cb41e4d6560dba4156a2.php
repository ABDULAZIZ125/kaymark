<?php $__env->startSection('title', 'My Bids & Purchases - Professional Vehicle Management'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8 relative z-10">

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">My Bids & Purchases</h1>
        <p class="text-gray-600">Track your bidding activity and purchase history</p>
    </div>

  <div style="display: flex; gap: 10px; margin-bottom: 20px;">

    <div style="background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); border: 1px solid #f0f0f0; width: 100%;">
        <div style="display: flex; align-items: center;">
            <div style="padding: 12px; border-radius: 10px; background: #eff6ff; margin-right: 16px;">
                <i class="fas fa-gavel" style="color:#2563eb; font-size:20px;"></i>
            </div>
            <div>
                <p style="font-size:14px; font-weight:500; color:#4b5563;">Total Bids</p>
                <p style="font-size:24px; font-weight:700; color:#1f2937;"><?php echo e(count($userBids)); ?></p>
            </div>
        </div>
    </div>

    <div style="background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); border: 1px solid #f0f0f0; width: 100%;">
        <div style="display: flex; align-items: center;">
            <div style="padding: 12px; border-radius: 10px; background: #ecfdf5; margin-right: 16px;">
                <i class="fas fa-shopping-cart" style="color:#16a34a; font-size:20px;"></i>
            </div>
            <div>
                <p style="font-size:14px; font-weight:500; color:#4b5563;">Purchases</p>
                <p style="font-size:24px; font-weight:700; color:#1f2937;"><?php echo e(count($buyNowItems)); ?></p>
            </div>
        </div>
    </div>

    <div style="background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); border: 1px solid #f0f0f0; width: 100%;">
        <div style="display: flex; align-items: center;">
            <div style="padding: 12px; border-radius: 10px; background: #f5f3ff; margin-right: 16px;">
                <i class="fas fa-trophy" style="color:#7c3aed; font-size:20px;"></i>
            </div>
            <div>
                <p style="font-size:14px; font-weight:500; color:#4b5563;">Winning Bids</p>
                <p style="font-size:24px; font-weight:700; color:#1f2937;">
                    <?php
                        $winningBids = 0;
                        foreach ($userBids as $bid) {
                            if (($bid->listing->current_bid ?? $bid->amount) == $bid->amount) {
                                $winningBids++;
                            }
                        }
                    ?>
                    <?php echo e($winningBids); ?>

                </p>
            </div>
        </div>
    </div>

</div>


    <!-- Bids Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 mb-10 overflow-hidden">
        <div class="border-b border-gray-200">
            <div class="p-6">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-100 rounded-lg">
                        <i class="fas fa-gavel text-blue-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">My Bids</h2>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vehicle</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">My Bid</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Highest</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bid Time</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php $__empty_1 = true; $__currentLoopData = $userBids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                            $isHighestBid = ($bid->listing->current_bid ?? $bid->amount) == $bid->amount;
                        ?>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo e($index+1); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-lg overflow-hidden">
                                        <?php if($bid->listing->images->first()): ?>
                                            <img class="h-10 w-10 object-cover" src="<?php echo e(asset('uploads/listings/' . $bid->listing->images->first()->image_path)); ?>" alt="<?php echo e($bid->listing->make); ?>">
                                        <?php else: ?>
                                            <div class="h-10 w-10 flex items-center justify-center bg-gray-100">
                                                <i class="fas fa-car text-gray-400"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900"><?php echo e($bid->listing->make); ?> <?php echo e($bid->listing->model); ?></div>
                                        <div class="text-sm text-gray-500"><?php echo e($bid->listing->year); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-blue-600">
                                $<?php echo e(number_format($bid->amount)); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                $<?php echo e(number_format($bid->listing->current_bid ?? $bid->amount)); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php if($isHighestBid): ?>
                                    <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Winning
                                    </span>
                                <?php else: ?>
                                    <span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Outbid
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                <?php echo e($bid->created_at->format('d M, Y h:i A')); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="<?php echo e(route('auction.dashboard', [
                                    'id' => $bid->listing->id,
                                    'slug' => Str::slug($bid->listing->year . ' ' . $bid->listing->make . ' ' . $bid->listing->model)
                                ])); ?>">
                                    View Auction
                                </a>


                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center text-gray-500">
                                    <i class="fas fa-gavel text-4xl mb-3 text-gray-300"></i>
                                    <p class="text-lg font-medium">No bids placed yet</p>
                                    <p class="text-sm mt-1">Start bidding on vehicles to see them here</p>
                                    <a href="" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                                        Browse Auctions
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Purchases Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="border-b border-gray-200">
            <div class="p-6">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-green-100 rounded-lg">
                        <i class="fas fa-shopping-cart text-green-600 text-xl"></i>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">Buy Now Purchases</h2>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vehicle</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Purchase Date</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php $__empty_1 = true; $__currentLoopData = $buyNowItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo e($index+1); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-gray-200 rounded-lg overflow-hidden">
                                        <?php if($purchase->listing->images->first()): ?>
                                            <img class="h-10 w-10 object-cover" src="<?php echo e(asset('uploads/listings/' . $purchase->listing->images->first()->image_path)); ?>" alt="<?php echo e($purchase->listing->make); ?>">
                                        <?php else: ?>
                                            <div class="h-10 w-10 flex items-center justify-center bg-gray-100">
                                                <i class="fas fa-car text-gray-400"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900"><?php echo e($purchase->listing->make); ?> <?php echo e($purchase->listing->model); ?></div>
                                        <div class="text-sm text-gray-500"><?php echo e($purchase->listing->year); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-green-600">
                                $<?php echo e(number_format($purchase->listing->price)); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                <?php echo e($purchase->created_at->format('d M, Y h:i A')); ?>

                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="<?php echo e(route('listing.show', [
                                        'id' => $purchase->listing->id,
                                        'slug' => Str::slug($purchase->listing->year . ' ' . $purchase->listing->make . ' ' . $purchase->listing->model)
                                    ])); ?>"
                                class="text-green-600 hover:text-green-900 px-3 py-1.5 rounded-md bg-green-50 hover:bg-green-100 transition-colors text-sm">
                                    View Vehicle
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center text-gray-500">
                                    <i class="fas fa-shopping-cart text-4xl mb-3 text-gray-300"></i>
                                    <p class="text-lg font-medium">No purchases found</p>
                                    <p class="text-sm mt-1">Your buy now purchases will appear here</p>
                                    <a href="" class="mt-4 px-4 py-2 bg-green-600 text-white rounded-lg text-sm font-medium hover:bg-green-700 transition-colors">
                                        Browse Vehicles
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Buyer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/Buyer/bids.blade.php ENDPATH**/ ?>