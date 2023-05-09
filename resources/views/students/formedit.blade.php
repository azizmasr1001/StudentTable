@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Student Data</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Simple Tables</li>
              </ol>
            </div>
          </div>

    <div class="card">
        <div class="card-header">
        <button type='button' class="btn btn-sm btn-secondary" onclick="window.location='{{ url('students') }}'">
            <i class="fas fa-solid fa-arrow-left"></i> Kembali
        </button>
        </div>
        <div class="card-body">
        <form method='POST' action="{{ url('students/'.$txtid) }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">Students ID</label>
                <div class="col-sm-4">
                  <input type="txtid" class="form-control-plaintext"
                  id="txtid" name="txtid" value="{{ $txtid}}">
                    @error('txtid')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                  @enderror

                </div>
              </div>
              <div class="row mb-3">
                <label for="txtfullname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                  <input type="fullname" class="form-control form-control-sm @error('txtfullname') is-invalid @enderror"
                  id="txtfullname" name="txtfullname" value="{{ $txtfullname }}">
                  @error('txtfullname')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtgender" class="col-sm-2 col-form-label">Gender Type</label>
                <div class="col-sm-4">
                  <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror"
                  name="txtgender" id="txtgender">
                    <option value="" selected>-Pilih-</option>
                    <option value="M" {{ ($txtgender=='M') ? 'selected' : '' }}>Male</option>
                    <option value="F" {{ ($txtgender=='F') ? 'selected' : '' }}>Female</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtaddress" class="col-sm-2 col-form-label ">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control @error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="30" rows="10">{{ $txtaddress }}</textarea>
                    @error('txtaddress')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtemail" class="col-sm-2 col-form-label ">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="txtemail" id="txtemail" class="form-control form-control-sm @error('txtemail') is-invalid @enderror" value="{{ $txtemail }}">
                    @error('txtemail')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtphone" class="col-sm-2 col-form-label ">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" name="txtphone" id="txtphone" class="form-control form-control-sm @error('txtphone') is-invalid @enderror" value="{{ $txtphone }}">
                    @error('txtphone')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-outline-success">
                        Update
                    </button>
                </div>
              </div>
        </form>
        </div>
    </div>
    </div>
    </section>
</div>
 @endsection
