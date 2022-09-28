<!doctype html>
<html lang="fa" dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
    <style>

            /* صفجه بندی  */
        nav{
            direction: ltr;
            text-align: right;
            padding: 7px 15px;
            margin-top: 50px;
            border-top:2px solid #ccc ;
        }
        nav .flex {
            display: none;
        }
        nav.items-center div p {
            display: none;
        }
            nav.items-center div span  a svg{
            width: 50px;
        }
            nav.items-center div span.relative  svg{
            width: 50px;
        }
            nav .font-medium{
                border:1px solid #ccc ;
            }





    </style>
</head>
<body>

<div class="container ">
   <div class="row ">
       <div class="col-8 p-5 mb-1">
           <a class="btn btn-primary "
              href="{{ route('crud.showPost') }}"
              role="button" aria-disabled="true">خانه </a >


           <a class="btn btn-primary "
              href="{{ route('crud.create') }}"
              role="button" aria-disabled="true">ایجاد پست جدید</a>

       </div>
       <div class="col-8 offset-2" >

           @if (session('create'))
               <section class="col-8 offset-2 bg-success text-center text-white p-3"
                        style="box-shadow: 5px 5px 5px lightgrey">
                   <h5> {{session('create')}}</h5>
               </section>
           @endif
           @if (session('delete'))
               <section class=" bg-danger text-center text-white p-3"
                        style="box-shadow: 5px 5px 5px lightgrey">
                   <h5> {{session('delete')}}</h5>
               </section>
           @endif
       </div>
    </div>
</div>

<div class="container ">
    <div class="row ">

                <table class="table table-success table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">ویرایش</th>
                        <th scope="col">حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                 @foreach($posts as $item)
                     <tr>
                         <td>
                            {{$item->id}}
                         </td>
                         <td>
                            <a class="m-3" href="{{ route('crud.show',['id'=>$item->id])}}">
                                {{$item->title}}
                            </a>
                         </td>
                         <td>

                         <a class="btn btn-primary "
                            href="{{ route('crud.edit',['id'=>$item->id])}}"
                            role="button" aria-disabled="true">ویرایش </a>
                         </td>
                         <td>

                            <form style="display: inline-block"
                                   class="ms-auto "
                                  action="{{ route('crud.destroy',['id'=>$item->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <input class="btn btn-danger" type="submit" value="حذف">
                            </form>
                         </td>


                     </tr>
                @endforeach
                 </table >
            </div>
    </div>

</div>
<div class="container">
    <div class="row ">

{{$posts->links()}}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
