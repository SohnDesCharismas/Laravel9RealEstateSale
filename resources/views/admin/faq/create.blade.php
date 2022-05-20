@extends('layouts.adminbase')

@section('title', 'Add Question')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div id="page-wrapper">
        <div class="col-sm-6">
            <h1>Add FAQ</h1>
        </div>

        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Add FAQ</li>
        </ol>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <section class="content">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">FAQ Elements</h3>
                    </div>
                    <form role="form" action="{{route('admin.faq.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Question</label>
                            <input class="form-control" type="text" placeholder="Question" name="question">
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea name="answer" class="form-control" id="answer">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
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

