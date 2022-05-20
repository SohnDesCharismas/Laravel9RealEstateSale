@extends('layouts.adminbase')

@section('title', 'Edit Home :'.$data->title)

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div id="page-wrapper">
        <div class="col-sm-6">
            <h1>Edit Home : {{$data->title}}</h1>
        </div>

        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Home</li>
        </ol>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <section class="content">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Home Elements</h3>
                    </div>
                    <form role="form" action="{{route('admin.home.update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select name="category_id" class="form-control select2">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}"
                                                @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" value="{{$data->title}}" name="title">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" type="text" value="{{$data->keywords}}" name="keywords">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" value="{{$data->description}}"
                                       name="description">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" value="{{$data->price}}" name="price">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" type="number" value="{{$data->quantity}}" name="quantity">
                            </div>
                            <div class="form-group">
                                <label>Minimum Quantity</label>
                                <input class="form-control" type="number" value="{{$data->minquantity}}"
                                       name="minquantity">
                            </div>
                            <div class="form-group">
                                <label>Tax %</label>
                                <input class="form-control" type="number" value="{{$data->tax}}" name="tax">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail İnf.</label>
                                <textarea name="detail" class="form-control" id="detail">

                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#detail'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control" name="city">
                                    <option selected>{{$data->city}}</option>
                                    <option>------</option>
                                    <option>Adana</option>
                                    <option>Adıyaman</option>
                                    <option>Afyonkarahisar</option>
                                    <option>Ağrı</option>
                                    <option>Amasya</option>
                                    <option>Ankara</option>
                                    <option>Antalya</option>
                                    <option>Artvin</option>
                                    <option>Aydın</option>
                                    <option>Balıkesir</option>
                                    <option>Bilecik</option>
                                    <option>Bingöl</option>
                                    <option>Bitlis</option>
                                    <option>Bolu</option>
                                    <option>Burdur</option>
                                    <option>Bursa</option>
                                    <option>Çanakkale</option>
                                    <option>Çankırı</option>
                                    <option>Çorum</option>
                                    <option>Denizli</option>
                                    <option>Diyarbakır</option>
                                    <option>Edirne</option>
                                    <option>Elazığ</option>
                                    <option>Erzincan</option>
                                    <option>Erzurum</option>
                                    <option>Eskişehir</option>
                                    <option>Gaziantep</option>
                                    <option>Giresun</option>
                                    <option>Gümüşhane</option>
                                    <option>Hakkâri</option>
                                    <option>Hatay</option>
                                    <option>Isparta</option>
                                    <option>Mersin</option>
                                    <option>İstanbul</option>
                                    <option>İzmir</option>
                                    <option>Kars</option>
                                    <option>Kastamonu</option>
                                    <option>Kayseri</option>
                                    <option>Kırklareli</option>
                                    <option>Kırşehir</option>
                                    <option>Kocaeli</option>
                                    <option>Konya</option>
                                    <option>Kütahya</option>
                                    <option>Malatya</option>
                                    <option>Manisa</option>
                                    <option>Kahramanmaraş</option>
                                    <option>Mardin</option>
                                    <option>Muğla</option>
                                    <option>Muş</option>
                                    <option>Nevşehir</option>
                                    <option>Niğde</option>
                                    <option>Ordu</option>
                                    <option>Rize</option>
                                    <option>Sakarya</option>
                                    <option>Samsun</option>
                                    <option>Siirt</option>
                                    <option>Sinop</option>
                                    <option>Sivas</option>
                                    <option>Tekirdağ</option>
                                    <option>Tokat</option>
                                    <option>Trabzon</option>
                                    <option>Tunceli</option>
                                    <option>Şanlıurfa</option>
                                    <option>Uşak</option>
                                    <option>Van</option>
                                    <option>Yozgat</option>
                                    <option>Zonguldak</option>
                                    <option>Aksaray</option>
                                    <option>Bayburt</option>
                                    <option>Karaman</option>
                                    <option>Kırıkkale</option>
                                    <option>Batman</option>
                                    <option>Şırnak</option>
                                    <option>Bartın</option>
                                    <option>Ardahan</option>
                                    <option>Iğdır</option>
                                    <option>Yalova</option>
                                    <option>Karabük</option>
                                    <option>Kilis</option>
                                    <option>Osmaniye</option>
                                    <option>Düzce</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rooms</label>
                                <input class="form-control" type="number" value="{{$data->rooms}}" name="rooms">
                            </div>
                            <div class="form-group">
                                <label>Baths</label>
                                <input class="form-control" type="number" value="{{$data->baths}}" name="baths">
                            </div>
                            <div class="form-group">
                                <label>Heating</label>
                                <select class="form-control" name="heating">
                                    <option selected>{{$data->heating}}</option>
                                    <option>Furnace</option>
                                    <option>Boiler</option>
                                    <option>Heat Pump</option>
                                    <option>Hybrid Heating</option>
                                    <option>Ductless Mini-Splits</option>
                                    <option>Radiant Heating</option>
                                    <option>Baseboard Heaters</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Garage</label>
                                <input class="form-control" type="number" value="{{$data->garage}}" name="garage">
                            </div>
                            <div class="form-group">
                                <label>Area</label>
                                <input class="form-control" type="number" value="{{$data->area}}" name="area">
                            </div>
                            <div class="form-group">
                                <label>Furnished Stuff</label>
                                <select class="form-control" name="furnished">
                                    <option selected>{{$data->furnished}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Floors</label>
                                <input class="form-control" type="number" value="{{$data->floors}}" name="floors">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input class="form-control" type="number" value="{{$data->age}}" name="age">
                            </div>
                            <div class="form-group">
                                <label>Dues</label>
                                <input class="form-control" type="number" value="{{$data->dues}}" name="dues">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input"
                                               id="exampleInputFile">
                                        <label class="custom-file-input" for="exampleInputFile">Choose Image
                                            File</label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Update data</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        </section>
    </div>

    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection

