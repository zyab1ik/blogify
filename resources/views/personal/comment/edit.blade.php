@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comment</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Comments</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Category name</h3>
                            </div>
                            <form class="form-horizontal" action="{{ route('personal.comment.update', $comment->id) }}"
                                  method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <textarea name="message" class="form-control w-100" cols="10" rows="10">{{ $comment->message }}</textarea>
{{--                                    <input type="text" class="form-control" name="message" placeholder="Comment name"--}}
{{--                                           value="{{ $comment->message }}">--}}
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
