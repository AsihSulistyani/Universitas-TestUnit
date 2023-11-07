@extends('layout.app')

@section('body')
<h1 class="mb-0">Tambah Nilai Mahasiswa</h1>
<hr/>

<form class="row g-3" action="{{ route('nilai.store') }}" method="post">
  @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama Mata Kuliah</label>
    <input type="text" class="form-control" name="nama_matakuliah">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nilai Mahasiswa</label>
    <input type="text" class="form-control" name="nilai_mahasiswa">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama_mahasiswa">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Program Studi</label>
    <input type="text" class="form-control" name="program_studi">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Semester</label>
    <input type="text" class="form-control" name="semester">

  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

@endsection