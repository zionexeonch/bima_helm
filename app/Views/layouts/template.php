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
    <?= $this->include('layouts/navbar')?>
    <?= $this->renderSection('content')?>
    <?= $this->include('layouts/footer')?>
    <script src="/bs/js/bootstrap.bundle.min.js"></script>
</body>
</html>