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
               role="button" aria-disabled="true">مشاهده لیست پست ها </a>



        </div>
    </div>
</div>

<div class="container ">
    <div class="row ">


        <div class="col-8 offset-2" >

            <form action="{{ route('crud.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1"lass="form-label">title</label>
                    <input type="text" class="form-control"
                           name="title"
                           aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">body</label>
                    <textarea class="form-control"
                              name="body"
                              id="exampleFormControlTextarea1" rows="3"></textarea>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1"  class="form-label">email</label>
                    <input type="email" class="form-control"
                           name="email"
                      aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="text" class="form-control"
                           name="phon"
                           aria-describedby="emailHelp">

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>



