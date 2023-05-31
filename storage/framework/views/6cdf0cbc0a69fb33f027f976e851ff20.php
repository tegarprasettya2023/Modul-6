<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Controller & View pada Laravel</title>

    <!-- CDN BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- CDN BOOSTRAP -->

    
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    
</head>
<body>
    <div class="container text-center mx-auto my-5">
        
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="mb-4" id="title">Belajar Controller & View pada Laravel</h1>
                </div>
            </div>
        </div>

        
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="<?php echo e(Vite::asset('resources/images/laravel.png')); ?>" alt="logo-laravel" id="img-LP">
                </div>
            </div>
        </div>

        
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <a class="btn btn-dark" href="<?php echo e(route('home')); ?>" id="btn-home">Home</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <!-- JS BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- JS BOOSTRAP -->
</body>
</html>
<?php /**PATH G:\Tugas Semester 4\Pemrograman Framework\ControllerView\resources\views/welcome.blade.php ENDPATH**/ ?>