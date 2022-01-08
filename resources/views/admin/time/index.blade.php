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
              <h3 class="mb-0">All Time</h3>
            </div>
            <div class="col text-right">
              <a href="{{ route('time.create') }}" class="btn btn-sm btn-primary">Add new</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Day</th>
                <th scope="col">Open</th>
                <th scope="col">Close</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach( $times as $key=>$time )
                                        <tr>
                                            <td> {{$key +1 }}</td>
                                            <td> {{  $time->day }}</td>
                                            <td> {{  $time->open }}</td>
                                            <td> {{  $time->close }}</td>
                                            <td> {{ $time->updated_at }}</td>

                                            <td>
                                                <a href="{{ route('time.edit',$time->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $time->id }}" action="{{ route('time.destroy',$time->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $time->id }}').submit();
                                                        }else {
                                                        event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>


                                        </tr>
                                        @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
</div>
@endsection