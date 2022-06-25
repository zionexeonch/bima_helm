<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fas/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <div id="top-header" class="py-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col text-start">
                    <div class="text-dark mb-0">
                        BIMA HELM
                    </div>
                </div>
                <div class="col text-end ">
                    <a href="#" class="text-dark mb-0 text-decoration-none">
                        Sign Up
                    </a>
                    |
                    <a href="#" class="text-dark mb-0 text-decoration-none">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('layouts/navbar')?>
    <?= $this->renderSection('content')?>
    <?= $this->include('layouts/footer')?>

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/bs/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>