<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highway to Hostel</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Include Navbar -->
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Content -->
    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Include Footer -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom JS if needed -->
    <script>
      // Example: AJAX-based filtering can be written here
      $(document).ready(function() {
        // Handle filter changes if needed
      });
    </script>

</body>
</html><?php /**PATH /Users/ashterhaider/Downloads/build/hostel-booking-demo/templates/layouts/app.blade.php ENDPATH**/ ?>