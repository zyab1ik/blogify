@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active">Edit post</li>
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
                                <h3 class="card-title">Post name</h3>
                            </div>
                            <form class="form-horizontal" action="{{ route('admin.post.update', $post->id) }}"
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="textInput">Post name</label>
                                        <input name="title" type="text" class="form-control" id="textInput"
                                               placeholder="Enter post name" value="{{ $post->title }}">
                                        @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form group">
                                        <label for="summernote" class="w-100">Post description</label>
                                        <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                                        @error('content')
                                        <div class="text-da nger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Add preview</label>
                                        <div class="w-50">
                                            <img src="{{ Storage::url($post->preview_image) }}" alt="preview_image" class="w-50">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="preview_image">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        @error('preview_image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Add image</label>
                                        <div class="w-50">
                                            <img src="{{ Storage::url($post->main_image) }}" alt="main_image" class="w-50">
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="main_image">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        @error('main_image')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group w-100">
                                        <label for="selectOption">Select</label>
                                        <select name="category_id" id="selectOption" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $post->category_id ? ' selected' : ''}}>
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="multiSelect">Tags</label>
                                        <select id="multiSelect" class="select2" name="tag_ids[]" multiple="multiple"
                                                data-placeholder="Select Tags"
                                                style="width: 100%;">
                                            @foreach($tags as $tag)
                                                <option {{
                                                    is_array($post->tags->pluck('id')->toArray()) &&
                                                    in_array($tag->id, $post->tags->pluck('id')->toArray())
                                                    ? ' selected' : ''
                                                    }} value="{{ $tag->id }}">{{ $tag->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
