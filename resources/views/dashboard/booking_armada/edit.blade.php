@extends('layouts.dashboard')

@section('content')
        <!-- Table -->
        <div class="container mt-3 d-flex justify-content-center">
            <div class="card rounded-3" style="width: 1100px;">
                <div class="card-header mw-100 h-100 text-center btn-secondary rounded-3 shadow-lg">
                    <h2 class="mt-0 mb-0" style="color: #fff; font-size: 22px;"><b>Silahkan Isi Data Berikut</b></h2>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('booking_armada.update', $booking_armada->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 mt-3 row">
                            <label for="" class="col-sm-2 col-form-label">Booking ID :</label>
                            <div class="col-sm-10">
                                <input type="number" name="booking_id" class="form-control @error('booking_id') is-invalid @enderror" 
                                    id="booking_id" autocomplete="off" placeholder="Masukan Booking ID" value="{{ old('booking_id', $booking_armada->booking_id) }}">
                            </div>
                            @error('booking_id')
                                <div class="col-sm-2"></div> 
                                <div class="text-danger col-sm-10">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Armada ID :</label>
                            <div class="col-sm-10">
                                <input type="number" name="armada_id" class="form-control @error('armada_id') is-invalid @enderror" 
                                    id="armada_id" placeholder="Masukkan Armada ID" value="{{ old('armada_id', $booking_armada->armada_id) }}">
                            </div>
                            @error('armada_id')
                                <div class="col-sm-2"></div> {{-- dummy --}}
                                <div class="text-danger col-sm-10">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        


                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Waktu Mulai :</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="waktu_mulai" class="form-control @error('waktu_mulai') is-invalid @enderror" 
                                    id="email" placeholder="Masukkan Waktu Mulai" autocomplete="off"  value="{{ old('waktu_mulai', $booking_armada->waktu_mulai) }}">
                            </div>
                            @error('waktu_mulai')
                                
                                <div class="col-sm-2"></div> {{-- dummy --}}
                                <div class="text-danger col-sm-10">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Waktu Selesai :</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" name="waktu_selesai" class="form-control @error('waktu_selesai') is-invalid @enderror" 
                                    id="email"  placeholder="Masukkan Waktu Selesai" autocomplete="off" value="{{ old('waktu_selesai', $booking_armada->waktu_selesai) }}">
                            </div>
                            @error('waktu_selesai')
                                <div class="col-sm-2"></div> {{-- dummy --}}
                                <div class="text-danger col-sm-10">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- TODO: harusnya diitung otomatis --}}
                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Durasi Jam :</label>
                            <div class="col-sm-10">
                                <input type="number" name="durasi_jam" class="form-control @error('durasi_jam') is-invalid @enderror" 
                                    id="pelanggan_id"  placeholder="Masukkan Durasi Jam" autocomplete="off" value="{{ old('durasi_jam', $booking_armada->durasi_jam) }}">
                            </div>
                            @error('durasi_jam')
                                <div class="col-sm-2"></div> {{-- dummy --}}
                                <div class="text-danger col-sm-10">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- TODO: harusnya diitung otomatis --}}
                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Harga :</label>
                            <div class="col-sm-10">
                                <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" 
                                    id="pelanggan_id"  placeholder="Masukkan Harga" autocomplete="off" value="{{ old('harga', $booking_armada->harga) }}">
                            </div>
                            @error('harga')
                                <div class="col-sm-2"></div> {{-- dummy --}}
                                <div class="text-danger col-sm-10">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3 mt-4 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Status :</label>
                            <div class="col-sm-10">
                                <select class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status">
                                    <option @if(old('status') == "Selesai" || $booking_armada->status == "Selesai") selected @endif value="Selesai">Selesai</option>
                                    <option @if(old('status') == "Aktif" || $booking_armada->status == "Aktif") selected @endif value="Aktif">Aktif</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="col-sm-2"></div> {{-- dummy --}}
                                <div class="text-danger col-sm-10">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        
                        <div class="mb-3 row mt-4">
                            <div class="col">
                                <button type="submit" name="aksi" value="tambah" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="{{ route('armada.index') }}" type="button" class="btn btn-danger">
                                    Cancel 
                                </a>
                            </div>
                        </div>
                    </form>                
                </div>
            </div>
        </div>
        <!-- End Table -->

@endsection