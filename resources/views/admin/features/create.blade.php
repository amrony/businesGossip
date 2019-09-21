@extends('admin.master')
@section('body')
    <div class="col-md-12">
        <div class="block-header" style="margin-bottom: 8px">
            <a href="{{ route('features.index') }}" class="btn btn-primary m-t-15 waves-effect">View All
                Features</a>
            </a>
            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
        </div>
        <div class="tile">
            <h3 class="tile-title">Add Features</h3>
            <div class="tile-body">
                <form action="{{ route('features.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title"  placeholder="Enter title">
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Short Description</label>
                        <textarea class="form-control" rows="6" name="short_description" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Long Description</label>
                        <textarea class="form-control" rows="8" name="long_description" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input class="form-control col-md-6" name="image" type="file">
                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                    </div>

                    <h3>Attribute One</h3>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title_one"  placeholder="Enter Title">
                        <span class="text-danger">{{ $errors->has('title_one') ? $errors->first('title_one') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Attribute Description</label>
                        <textarea class="form-control" rows="8" name="description_one" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('description_one') ? $errors->first('description_one') : '' }}</span>
                    </div>

                    <h3>Attribute Two</h3>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title_two"  placeholder="Enter Title">
                        <span class="text-danger">{{ $errors->has('title_two') ? $errors->first('title_two') : ''
                        }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Attribute Description</label>
                        <textarea class="form-control" rows="8" name="description_two" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('description_two') ? $errors->first
                        ('description_two') : '' }}</span>
                    </div>

                    <h3>Attribute Three</h3>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title_three"  placeholder="Enter Title">
                        <span class="text-danger">{{ $errors->has('title_three') ? $errors->first('title_three') : ''
                        }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Attribute Description</label>
                        <textarea class="form-control" rows="8" name="description_three" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('description_three') ? $errors->first
                        ('description_three') : '' }}</span>
                    </div>

                    <h3>Attribute Four</h3>
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <input class="form-control" type="text" name="title_four"  placeholder="Enter Title">
                        <span class="text-danger">{{ $errors->has('title_four') ? $errors->first('title_four') : ''
                        }}</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Attribute Description</label>
                        <textarea class="form-control" rows="8" name="description_four" placeholder="" ></textarea>
                        <span class="text-danger">{{ $errors->has('description_four') ? $errors->first
                        ('description_four') : '' }}</span>
                    </div>


                    <div class="">
                        <button class="btn btn-primary" type="submit"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

