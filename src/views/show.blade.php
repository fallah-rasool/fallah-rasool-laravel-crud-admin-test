<!doctype html>
<html lang="fa" dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
</head>
<body>

<div class="container ">
    <div class="row ">
        <div class="col-8 p-5 mb-1">
            <a class="btn btn-primary "
               href="{{ route('crud.showPost') }}"
               role="button" aria-disabled="true">خانه </a >
            <a class="btn btn-primary "
               href="{{ route('crud.showPost') }}"
               role="button" aria-disabled="true">مشاهده لیست پست ها </a >

            <a class="btn btn-primary "
               href="{{ route('crud.create') }}"
               role="button" aria-disabled="true">ایجاد پست جدید</a>

        </div>
    </div>
</div>




<div class="container ">
    <div class="row ">
        <div class="col-12 px-5 mb-1 bg-secondary ">

            <h1 class="mb-5 text-light"> عنوان پیام :{{$item->title}}</h1>
            <h5 class="mb-5"> متن پیام {{$item->body}}</h5>
            <h4 class="mb-5"> ایمیل :{{$item->email}}</h4>
            <h4 class="mb-5"> شماره تماس{{$item->phon}}</h4>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
