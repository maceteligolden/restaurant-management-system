@extends('layouts.main')

@section('content')
<!-- Page content -->
<div class="container-fluid mt-4">
<div class="row">
    <div class="col-12">
        @include('layouts.partial.msg')
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Edit Slider</h3>
            </div>
            
          </div>
        </div>
        <div class="card-content p-4">

            <form action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$slider->title}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title" value="{{$slider->sub_title}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Image </label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{route('slider.index')}}" class="btn btn-danger">Back </a>

            </form>

        </div>
      </div>
    </div>
</div>
</div>
@endsection