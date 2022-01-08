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
              <h3 class="mb-0">Add New Time</h3>
            </div>
            
          </div>
        </div>
        <div class="card-content p-4">

            <form action="{{ route('time.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Day</label>
                            <select class="form-control" name="day" aria-label="Default select day">
                              <option selected>Select day of the week</option>
                              <option value="Monday">Monday</option>
                              <option value="Tuesday">Tuesday</option>
                              <option value="Wednesday">Wednesday</option>
                              <option value="Thursday">Thursday</option>
                              <option value="Friday">Friday</option>
                              <option value="Saturday">Saturday</option>
                              <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Opening time (0000-2300hrs)</label>
                                  <input type="number" class="form-control" name="open" value="{{$time->open}}">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Closing time (0000-2300hrs)</label>
                                <input type="number" class="form-control" name="close" value="{{$time->close}}">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{route('time.index')}}" class="btn btn-danger">Back </a>

            </form>

        </div>
      </div>
    </div>
</div>
</div>
@endsection