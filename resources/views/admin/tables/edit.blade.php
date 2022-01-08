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
              <h3 class="mb-0">Edit table</h3>
            </div>
            
          </div>
        </div>
        <div class="card-content p-4">

            <form action="{{ route('table.update',$table->id) }}" method="POST" >
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$table->name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="bmd-label-floating">Quantity</label>
                          <input type="number" class="form-control" name="quantity" value="{{$table->quantity}}">
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="bmd-label-floating">Capacity</label>
                          <input type="number" class="form-control" name="capacity" value="{{$table->capacity}}">
                      </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{route('table.index')}}" class="btn btn-danger">Back </a>

            </form>
        </div>
      </div>
    </div>
</div>
</div>
@endsection