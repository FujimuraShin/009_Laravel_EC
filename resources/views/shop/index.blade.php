<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>Mine Laravel EC Site</title>
        @csrf 

        @vite(['resources/sass/app.scss','resources/js/app.js'])
    </head>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                             <div>
                                商品名
                            </div>
                            <div>
                                <img  src="{{asset('storage/Camera.jpg')}}" width="100" height="100">
                            </div>
                            <div>
                                金額
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">購入</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    画像
                </div>
                <div class="col">
                    金額
                </div>
            </div>
        </div>

    <body>


    </body>




</html>