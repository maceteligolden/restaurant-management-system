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
              <h3 class="mb-0">All Tables</h3>
            </div>
            <div class="col text-right">
              <a href="{{ route('table.create') }}" class="btn btn-sm btn-primary">Add new</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Capacity</th>
                <th scope="col">Quantity</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach( $tables as $key=>$table )
                                        <tr>
                                            <td> {{$key +1 }}</td>
                                            <td> {{  $table->name }}</td>
                                            <td> {{  $table->capacity }}</td>
                                            <td> {{  $table->quantity }}</td>
                                            <td> {{ $table->updated_at }}</td>

                                            <td>
                                                <a href="{{ route('table.edit',$table->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $table->id }}" action="{{ route('table.destroy',$table->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $table->id }}').submit();
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