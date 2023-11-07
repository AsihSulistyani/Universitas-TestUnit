@extends('layout.app')

@section('body')
    
<a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Daftar Nilai</a>
<hr/>
<h1>Daftar Keseluruhan Nilai</h1>
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
@endif

<table class="table table-bordered">
    <tr>
            <td>No.</td>
            <td>Nama Mata Kuliah</td>
            <td>Nilai Mahasiswa</td>
            <td>Nama Mahasiswa</td>
            <td>Program Studi</td>
            <td>Semester</td>
            <td>Action</td>
        </tr>
    @foreach ($nilai as $value)
         <tr>
            <td>{{ $value-> id}}</td>
            <td>{{ $value-> nama_matakuliah}}</td>
            <td>{{ $value-> nilai_mahasiswa}}</td>
            <td>{{ $value-> nama_mahasiswa}}</td>
            <td>{{ $value-> program_studi}}</td>
            <td>{{ $value-> semester}}</td>
            <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="{{ route('nilai.show', $value->id) }}" type="button" class="btn btn-success" >Detail</a>
                <a href="{{ route('nilai.edit', $value->id) }}" type="button" class="btn btn-warning">Edit</a>
                <form action="{{ route('nilai.destroy', $value->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Apakah Anda Yakin ingin mengahpus Data ini?')">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger m-0">Delete</button>
                </form>
                
                
            </div>
            </td>
        </tr>
        @endforeach
    </table>

@endsection