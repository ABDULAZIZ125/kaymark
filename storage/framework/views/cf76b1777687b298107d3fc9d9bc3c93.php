<?php $__env->startSection('content'); ?>
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">User Management</h1>
</div>

<!-- User Stats -->
<div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-6">
    <div class="bg-white p-4 rounded shadow text-center">
        <div class="text-2xl font-bold text-blue-600"><?php echo e($userStats['total']); ?></div>
        <div class="text-sm text-gray-600">Total Users</div>
    </div>
    <div class="bg-white p-4 rounded shadow text-center">
        <div class="text-2xl font-bold text-green-600"><?php echo e($userStats['buyers']); ?></div>
        <div class="text-sm text-gray-600">Buyers</div>
    </div>
    <div class="bg-white p-4 rounded shadow text-center">
        <div class="text-2xl font-bold text-purple-600"><?php echo e($userStats['sellers']); ?></div>
        <div class="text-sm text-gray-600">Sellers</div>
    </div>
    <div class="bg-white p-4 rounded shadow text-center">
        
        <div class="text-sm text-gray-600">Suspended</div>
    </div>
    <div class="bg-white p-4 rounded shadow text-center">
        
        <div class="text-sm text-gray-600">Banned</div>
    </div>
</div>

<!-- Users Table -->
<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold">All Users</h2>
            <div class="relative">
                <input type="text" placeholder="Search users..." class="pl-10 pr-4 py-2 border rounded-lg">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Joined</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="<?php echo e($user->avatar_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name)); ?>" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900"><?php echo e($user->name); ?></div>
                                <div class="text-sm text-gray-500"><?php echo e($user->email); ?></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            <?php echo e($user->role === 'seller' ? 'bg-purple-100 text-purple-800' : 'bg-green-100 text-green-800'); ?>">
                            <?php echo e(ucfirst($user->role)); ?>

                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            <?php echo e($user->status === 'active' ? 'bg-green-100 text-green-800' : 
                               ($user->status === 'suspended' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800')); ?>">
                            <?php echo e(ucfirst($user->status)); ?>

                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <?php echo e($user->created_at->format('M j, Y')); ?>

                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <a href="#" class="text-blue-600 hover:text-blue-900">View</a>
                            <a href="#" class="text-green-600 hover:text-green-900">Edit</a>
                            <?php if($user->status === 'active'): ?>
                            <form action="<?php echo e(route('admin.users.suspend', $user)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="text-yellow-600 hover:text-yellow-900 confirm-action">Suspend</button>
                            </form>
                            <form action="<?php echo e(route('admin.users.ban', $user)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="text-red-600 hover:text-red-900 confirm-action">Ban</button>
                            </form>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    
    <div class="px-6 py-4 border-t border-gray-200">
        <?php echo e($users->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/admin/user.blade.php ENDPATH**/ ?>