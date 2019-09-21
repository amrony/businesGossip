@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('about_us.index') }}" class="btn btn-primary m-t-15 waves-effect">View All
                About Us</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Add Business Profile</h3>
            <div class="tile-body">
                <form action="{{ route('about_us.update', $aboutUs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $aboutUs->id }}">
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title" value="{{ $aboutUs->title }}">
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Short Description</label>
                        <textarea class="form-control" rows="6" name="short_description">{{ $aboutUs->short_description }}</textarea>
                        <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Long Description</label>
                        <textarea class="form-control" rows="8" name="long_description" placeholder="" >{{
                        $aboutUs->long_description }}</textarea>
                        <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input class="form-control col-md-6" name="image" type="file"><br>
                        <img src="{{ url('storage/about_us/',$aboutUs->image) }}" alt="" width="120" height="140">
                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                    </div>

                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
