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
              <h3 class="mb-0">All Slider</h3>
            </div>
            <div class="col text-right">
              <a href="{{ route('slider.create') }}" class="btn btn-sm btn-primary">Add new</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Sub Title</th>
                <th scope="col">Image</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach( $sliders as $key=>$slider )    
              <tr>
                <td>
                    {{$key +1 }}
                </td>
                <td>
                    {{ $slider->title  }}
                </td>
                <td>
                    {{  $slider->sub_title }}
                </td>
                <td>
                    {{  $slider->image }}
                </td>
                <td>
                    {{ $slider->updated_at }}
                </td>
                <td>
                    <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm">Edit</a>

                    <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" style="display: none;" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $slider->id }}').submit();
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