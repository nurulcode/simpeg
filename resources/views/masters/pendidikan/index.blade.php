@extends('layouts.global')

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Validation type</h4>
                @include('masters.pendidikan.create', [
                'kategoris' => $kategoris,
                'namas' => $pendidikans
                ])
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead class="text-center text-bold">
                        <tr>
                            <th>Kategori</th>
                            <th>Nama</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendidikans as $result)
                            <tr>
                                <td>{{ $result->kategori }}</td>
                                <td>{{ $result->nama }}</td>
                                <td>{{ $result->laki }}</td>
                                <td>{{ $result->perempuan }}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-primary btn-sm dropdown-toggle arrow-none waves-effect waves-light"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ route('pendidikan.edit', $result->id) }}">Detail</a>
                                            <a class="dropdown-item"
                                                href="{{ route('pendidikan.show', $result->id) }}">Edit
                                                Action</a>
                                            <div class="dropdown-divider"> </div>
                                            <form
                                                action="{{ route('pendidikan.destroy', $result->id) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="dropdown-item" onclick="return confirm('Are you sure?')">
                                                    Delete Action
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- @include('pegawais.edit') --}}
        </div>
    </div><!-- end col -->
</div>
@endsection