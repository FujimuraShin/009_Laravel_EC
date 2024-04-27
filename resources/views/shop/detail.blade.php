<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>Mine Laravel EC Site</title>
        @csrf 

        @vite(['resources/sass/app.scss','resources/js/app.js'])
    </head>

    <body>

    商品詳細画面

        <div class="container text-center">
            <div class="row justify-content-center">

            <div class="card" style="width:36rem;height:36rem">
                <div class="card-body">

                    <div>{{ $shops->item_name}}</div>
                    <img  src="{{asset('../storage/images/'.$shops->image_name)}}" width="300" height="300"><br/>

                    <div>{{ $details->item_detail }}</div><br/>
                    <div>￥{{ $shops->price }}円</div><br/>
                    <button type="button" class="btn btn-primary">購入画面へ</button>


                </div>
        
            </div>
                 
            </div>
        </div>

    


    </body>




</html>