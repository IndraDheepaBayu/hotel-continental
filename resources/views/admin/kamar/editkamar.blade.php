@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Edit Data Kamar</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width:90%">
                  <form method="POST" action="/updatedatakamar/{{ $data->id }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Kamar</label>
                        <input type="text" name="no_kamar" value="{{ $data->no_kamar }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('no_kamar')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Kamar</label>
                    <input type="text" name="harga" value="{{ $data->harga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('harga')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Kapasitas Kamar</label> 
                  <input type="text" name="kapasitas" value="{{ $data->kapasitas }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 

                  @error('kapasitas') 
                  <div class="text-danger"> 
                    {{message}} 
                  </div> 
                  @enderror 
                </div> 

                <select class="form-select" name="tipe" aria-label="Default select example" style="width: 100%"> 
                    <option selected>Pilih Tipe Kamar</option> 
                    <option value="1">Superior</option> 
                    <option value="2">Deluxe</option> 
                  </select>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>  
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection