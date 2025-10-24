<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?php echo $__env->yieldContent('title', 'Crowz Dashboard'); ?></title>

    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FDFBF8;
            color: #333;
        }

        .main-content {
            padding: 2rem;
        }


    </style>



    
    
</head>

<body class="flex">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


    
    <?php echo $__env->make('partials.buyerSidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <main class="main-content" style="margin-left: 230px">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/layouts/Buyer.blade.php ENDPATH**/ ?>