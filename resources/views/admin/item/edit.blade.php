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
              <h3 class="mb-0">Add New Item</h3>
            </div>
            
          </div>
        </div>
        <div class="card-content p-4">

            <form action="{{ route('item.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$item->name}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Category</label>
                            <select class="form-control" name="category">
                                @foreach($categories as $key=>$category)
                                    <option {{ $category->id == $item->category->id ? 'selected': ''}} value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Description</label>
                            <textarea name="description" class="form-control" > {{$item->description}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Price</label>
                            <input type="number" class="form-control" name="price" value="{{$item->price}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label class="control-label">Image</label>
                        <input type="file" name="image">
                    </div>
                </div>
        </div>

        <button type="submit" class="btn btn-primary"> Save</button>
        <a href="{{route('item.index')}}" class="btn btn-danger">Back </a>

        </form>

        </div>
      </div>
    </div>
</div>
</div>
@endsection