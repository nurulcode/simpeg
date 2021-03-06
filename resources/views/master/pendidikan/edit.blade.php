@extends('layouts.global')
@section('title')
    Edit Pendidikan
@endsection

@section('content')
<div class="row justify-content-center ">
    <div class="col-lg-8 ">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Edit Pendidikan</h4>
                <form action="{{ route('pendidikan.update', $pendidikan->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="control-label">Kategori</label>
                    <select class="form-control select2 {{ $errors->has('kategori') ? 'is-invalid' : '' }}" name="kategori">
                        <option value="">--Pilih--</option>
                        @foreach($kategoris as $item)
                        <option value="{{ $item->kategori }}" {{ $pendidikan->kategori == $item->kategori ? 'selected' : '' }}>{{ $item->kategori }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('kategori'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('kategori') }}</strong>
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" value="{{ $pendidikan->nama }}" type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}">
                    @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Tingkat</label>
                    <input name="tingkat" value="{{ $pendidikan->tingkat }}" type="text" class="form-control {{ $errors->has('tingkat') ? 'is-invalid' : '' }}">
                    @if($errors->has('tingkat'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('tingkat') }}</strong>
                    </div>
                    @endif
                </div>


                <div class="form-group">
                    <label>Jumlah Laki</label>
                    <input name="laki" value="{{ $pendidikan->laki }}" type="text" class="form-control {{ $errors->has('laki') ? 'is-invalid' : '' }}">
                    @if($errors->has('laki'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('laki') }}</strong>
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Jumlah Perempuan</label>
                    <input name="perempuan" value="{{ $pendidikan->perempuan }}" type="text" class="form-control {{ $errors->has('perempuan') ? 'is-invalid' : '' }}">
                    @if($errors->has('perempuan'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('perempuan') }}</strong>
                    </div>
                    @endif
                </div>

                <div class="form-group mb-0">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
