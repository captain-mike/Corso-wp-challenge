<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .row > div {
            height: 50px;
            background-color:grey;
            border: 1px solid #000;
            color: white;
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">col-8</div>
            <div class="col">col</div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">col-8</div>
            <div class="col-5">col-5</div>
        </div>
        <div class="row mt-2">
            <div class="col-8">col-8</div>
            <div class="col-5">col-5</div>
            <div class="col-5">col-5</div>
            <div class="col-2">col-2</div>
        </div>
    </div>

    <h2 class="mt-5 text-center text-lg-start ">bootstrap con breakpoints</h2>
    <div class="container ">
        <div class="row">
            <div class="col-12 col-sm-6">col-12 col-sm-6</div>
            <div class="col-12 col-sm-6">col-12 col-sm-6</div>
        </div>
        <div class="row mt-2">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">col-12 col-sm-6 col-lg-4 col-xl-3</div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">col-12 col-sm-6 col-lg-4 col-xl-3</div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">col-12 col-sm-6 col-lg-4 col-xl-3</div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">col-12 col-sm-6 col-lg-4 col-xl-3</div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-none d-lg-block">solo desktop</div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-lg-none">solo mobile</div>
        </div>
    </div>




    
</body>
</html>