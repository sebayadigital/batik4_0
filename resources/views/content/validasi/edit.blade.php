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
                        <strong><i class="fas fa-clipboard-check mr-2"> </i> Validasi Harga - Edit {{ $validasi->nama }} </strong><a href="{{ url()->previous() }}" class="btn btn-danger btn-sm ml-auto"><i class="fas fa-arrow-left mr-2"> </i> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($validasi->produks as $dt_produk)
                    {{ $dt_produk->nama_batik }}
                    <br>
                    @endforeach
                    <form class="col" method="POST" action="{{ route('validasi.update', $validasi->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">

                            <div class="col-md-6 form-group input-group-sm">
                                <label for="inpTotal">Harga Produk - {{ "Rp " . number_format($validasi->total,2,',','.') }}</label>
                                <input type="number" class="form-control" placeholder="" id="inpTotal" name="inpTotal" value="{{ $validasi->total }}">
                            </div>

                            <div class="col-md-12 form-group input-group-sm">
                                <label for="inpKode">Validasi Harga</label>
                                <br>
                                <div class="form-check-inline">
                                    <label class="form-check-label" for="inpStatus1">
                                        <input type="radio" class="form-check-input" id="inpStatus1" name="inpStatus" value="menunggu" @if($validasi->status == 'menunggu') checked @endif >Menawarkan
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label" for="inpStatus2">
                                        <input type="radio" class="form-check-input" id="inpStatus2" name="inpStatus" value="siap_diantrikan" @if($validasi->status == 'siap_diantrikan') checked @endif >Terima dan Siap Diantrikan
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label" for="inpStatus3">
                                        <input type="radio" class="form-check-input" id="inpStatus3" name="inpStatus" value="batal" @if($validasi->status == 'batal') checked @endif >Tolak atau Batalkan
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 form-group input-group-sm">
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