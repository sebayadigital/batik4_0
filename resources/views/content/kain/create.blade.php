@extends('layouts.default')
@section('content')

<div class="page-inner mt--5">
    <div class="row">

        <div class="col-md-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <strong><i class="far fa-hdd mr-2"> </i> Form Jenis Kain (per 1m x 1m)</strong><a href="{{ url()->previous() }}" class="btn btn-danger btn-sm ml-auto"><i class="fas fa-arrow-left mr-2"> </i> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form class="col" method="POST" action="{{ route('kain.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group input-group-sm">
                                <label for="inpNama">Nama Kain</label>
                                <input type="text" class="form-control" placeholder="" id="inpNama" name="inpNama">
                            </div>

                            <div class="col-md-6 form-group input-group-sm">
                                <label for="inpBiaya">Biaya Kain</label>
                                <input type="number" class="form-control" placeholder="" id="inpBiaya" name="inpBiaya">
                            </div>

                            <div class="col-md-6 form-group input-group-sm">
                                <label for="inpBerat">Berat Kain (gram)</label>
                                <input type="number" class="form-control" placeholder="" id="inpBerat" name="inpBerat">
                            </div>

                            <div class="col-md-12 form-group input-group-sm">
                                <input class="btn btn-primary btn-sm" type="submit" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection