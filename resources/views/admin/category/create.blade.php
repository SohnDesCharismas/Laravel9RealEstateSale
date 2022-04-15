@extends('layouts.adminbase')

@section('title', 'Add Category')



@section('content')

    <div id="page-wrapper">
        <div class="col-sm-6">
            <h1>Add Category</h1>
        </div>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>

        <div class="col-md-12 col-sm-12 col-xs-12">
           <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                   <h3 class="card-title">Category Elements</h3>
                </div>
                <form role="form" action="/admin/category/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" placeholder="Title" name="title">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" type="text" placeholder="Keywords" name="keywords">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" placeholder="Description" name="description">
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                              <div class="custom-file">
                                  <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                  <label class="custom-file-input" for="exampleInputFile">Choose File</label>
                              </div>
                              <div class="input-group-append">
                                  <span class="input-group-text" id="">Upload</span>
                              </div>
                            </div>
                        </div>
                         <div class="form-group">
                                   <label>Status</label>
                                   <select class="form-control" name="status">
                                   <option>True</option>
                                   <option>False</option>
                                   </select>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
            </div>
           </section>
        </div>

    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
