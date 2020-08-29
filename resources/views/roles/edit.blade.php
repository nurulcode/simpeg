@extends("layouts.global")

@section("title") Tambah Data @endsection
@section("page-title") Tambah Data Role @endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('roles.update', $role->id) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="inner form-group">
                        <div class="inner row">
                            <div class="col-md-10 col-8">
                                <input type="text" name="name" value="{{ old('name', $role->name ) }}" class="inner form-control {{ $errors->has('name') ? 'is-invalid' : '' }} " placeholder="Nama Roles ...">
                                <small class="text-danger">{{ $errors->first('role') ? $errors->first('role') : '*. superuser, user, manage-pegawai'}}</small>
                            </div>
                            <div class="col-md-2 col-4">
                                <input type="submit" class="btn btn-primary btn-block inner" value="Update Role">
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        @php $no = 1; @endphp

                        @foreach ($permission as $result)
                        <input type="checkbox" name="permission[]" id="{{ $result }}" value="{{ $result->id }}" {{ in_array($result->id, $rolePermissions) ? 'checked' : '' }}>
                        <label for="{{ $result }}">{{ $result->name }}</label>
                            @if ($no++%4 == 0)
                               <br>
                            @endif
                        @endforeach
                        <small class="text-danger">{{ $errors->first('role') }}</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
