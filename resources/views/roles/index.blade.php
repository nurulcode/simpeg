@extends('layouts.global')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="text-right">
                    <a href="{{ route('roles.create') }}" class="btn btn-primary waves-light mb-3">
                        Tambah Data
                    </a>
                </div>
                <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="text-center text-bold">
                        <tr>
                            <td>No</td>
                            <th>Nama</th>
                            <th>Guard Name</th>
                            <th>Roles</th>
                            <th>Create At</th>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $result)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $result->name }}</td>
                            <td>
                                {{ $result->guard_name }}
                            </td>
                            <td>
                                @php $no = 1; @endphp
                                @foreach ($result->permissions as $role)
                                <label class="badge badge-primary">{{ $role->name }}</label>
                                    @if ($no++%4 == 0)
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                            <td>{{ $result->created_at }}</td>
                            <td class="text-center">
                                {{-- <a class="btn btn-info btn-sm waves-effect waves-light" href="{{ route('roles.show', $result->id) }}"><i class="fas fa-eye"></i></a> --}}
                                <a class="btn btn-primary btn-sm waves-effect waves-light" href="{{ route('roles.edit', $result->id) }}"><i class="fas fa-edit"></i></a>
                                <form class="d-inline" action="{{ route('roles.destroy', $result->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm waves-effect waves-light" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
