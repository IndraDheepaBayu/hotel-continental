@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Tambah Data Fasilitas</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width:90%">
                  <form method="POST" action="{{ route('insertdatafasilitasumum') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kamar</label>
                            <input type="text" name="kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('kamar')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror


                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>  
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection