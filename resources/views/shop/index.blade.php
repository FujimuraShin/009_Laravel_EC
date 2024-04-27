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

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                             <div>
                                本棚
                            </div>
                            <div>
                                <img  src="../storage/images/bookshelf.jpg" width="200" height="200">
                            </div>
                            <div>
                                ￥1,2500
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">購入</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                             <div>
                                カメラ
                            </div>
                            <div>
                                <img  src="../storage/images/Camera.jpg" width="200" height="200">
                            </div>
                            <div>
                                ￥3,2500
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">購入</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                             <div>
                                椅子
                            </div>
                            <div>
                                <img  src="../storage/images/Chair.jpg" width="200" height="200">
                            </div>
                            <div>
                                ￥2500
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">購入</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                             <div>
                                机
                            </div>
                            <div>
                                <img  src="../storage/images/Desk.jpg" width="200" height="200">
                            </div>
                            <div>
                                ￥8000
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">購入</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                             <div>
                                照明
                            </div>
                            <div>
                                <img  src="../storage/images/Lamp.jpg" width="200" height="200">
                            </div>
                            <div>
                                ￥3.4500
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">購入</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card ">
                        <div class="card-body ">
                             <div>
                                プラネタリウム
                            </div>
                            <div>
                            <img  src="../storage/images/Planetarium.jpg" width="200" height="200">
                            </div>
                            <div>
                                ￥4,3680
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">購入</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!--
                    bbbb
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                @foreach($data as $datas)
                                    <td>{{ $datas->item_name }}</td>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                -->
                
                @foreach($data as $datas)
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                
                                <div>{{ $datas->item_name }}</div>
                                <img  src="{{asset('../storage/images/'.$datas->image_name)}}" width="200" height="200">
                                <div>￥{{ $datas->price }}円</div>
                                <div>
                                    <button type="button" class="btn btn-primary">購入</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



                 
            </div>
        </div>

    <body>


    </body>




</html>