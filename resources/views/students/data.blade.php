@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Student Data</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Student Data</li>
              </ol>
            </div>
          </div>

<div class="card">
    <div class="card-header">
      <button type='button' class="btn btn-sm btn-primary" onclick="window.location='{{ url('students/add') }}'">
        <i class="fas fa-solid fa-user-plus"></i> Add new Data
      </button>
    </div>
    @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successfully </strong>{{ session('msg') }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <i class="fas fa-times" style="color:red"></i>
        </button>
      </div>
    @endif
    <div class="card-header">
    <form method="get">
        <div class="row mb-3">
            <label for="search" class="col-sm-2 col-form-label ">Find Data</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" value="{{ $search }}" placeholder="Please Input Key to search" name="search" autofocus>
            </div>
          </div>
    </form>
    </div>
    <div class="card-body">
      <div class="alert alert-info">
        <table class="table table-sm table-striped table-bordered ">
        <thead>
            <th>No</th>
            <th>Id Student</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Option</th>
        </thead>
        <tbody>
            @php
                $number = 1+ (($students->currentPage()-1)*$students->perPage());
            @endphp
            @foreach ($students as $row)
                <tr>
                    {{-- <th>{{ $loop->iteration }}</th> --}}
                    <td>{{ $number++}}</td>
                    <td>{{ $row->idstudents }}</td>
                    <td>{{ $row->fullname }}</td>
                    <td>{{ $row->gender =='M' ?'Male': 'Female' }}</td>
                    <td>{{ $row->address }}</td>
                    <td>{{ $row->emailaddress }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>
                        <button onclick="window.location='{{ url('students/'.$row->idstudents) }} '"
                            type='button' class="btn btn-sm btn-info" title="Edit Data">
                            <i class="fas fa-edit"></i>
                        </button>
                        <form onsubmit="return deleteData('{{ $row->fullname }}')" style="display: inline"
                        method="POST" action="{{ url('students/' .$row->idstudents) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Delete Data" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        {{-- {{ $students->links() }} --}}
        {!! $students->appends(Request::except('page'))->render() !!}
      </div>

    </div>
  </div>
  <script>
    function deleteData(name){
        msg =confirm(`Are You Sure, Students data with name ${name} to be deleted?`);
        if(msg) return true;
        else return false;
    }
  </script>
   </div>
    </section>
</div>
@endsection
