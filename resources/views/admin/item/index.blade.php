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
              <h3 class="mb-0">All Items</h3>
            </div>
            <div class="col text-right">
              <a href="{{ route('item.create') }}" class="btn btn-sm btn-primary">Add new</a>
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
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach( $items as $key=>$item )
                    <tr>
                        <td> {{$key +1 }}</td>
                        <td> {{  $item->name }}</td>
                        <td> <img class="img-thumbnail img-responsive"
                                    src="{{asset('uploads/item/'.$item->image)}}" style="height: 50px; width:70px" alt=""></td>
                        <td> {{  $item->category->name }}</td>
                        <td> {{  $item->price }}</td>
                        <td> {{  $item->description }}</td>
                        <td> {{ $item->updated_at }}</td>

                        <td>
                            <a href="{{ route('item.edit',$item->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                            <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $item->id }}').submit();
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