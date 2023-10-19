@extends('admin.layouts.app')

@section('content')

<section class="p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <a href="{{ url('admin/developers/create') }}" class="btn btn-lg btn-dark rounded-0 mb-3">Create</a>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="100px">Picture</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Social Media</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($datas as $data)
                                
                            <tr>
                                <td>{{ '#' }}</td>
                                <td>
                                    @if ($data->picture)
                                        <img src="{{ $data->picture }}" alt="Profile Picture" class="w-100 img-thumbnail rounded-circle">
                                    @else 
                                        <img src="{{ asset('images/developers/no-image.jpg') }}" alt="No Profile Picture" class="w-100 img-thumbnail rounded-circle">
                                    @endif
                                    
                                </td>
                                <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                <td>{{ $data->address }}</td>
                                <td>
                                    <a href="{{ $data->instagram }}" target="_blank" class="btn btn-sm btn-outline-dark">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="{{ $data->facebook }}" target="_blank" class="btn btn-sm btn-outline-dark">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="{{ $data->linkedin }}" target="_blank" class="btn btn-sm btn-outline-dark">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                    <a href="{{ $data->github }}" target="_blank" class="btn btn-sm btn-outline-dark">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('developer/show/') }}" class="btn btn-sm btn-dark">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ url('developer/edit/') }}" class="btn btn-sm btn-outline-dark">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <a href="{{ url('developer/delete/') }}" class="btn btn-sm btn-outline-dark">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            @endforeach                           

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
    
@endsection