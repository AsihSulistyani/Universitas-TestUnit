@extends('layout.app')

@section('body')
<h1 class="mb-0">Data Nilai Mahasiswa</h1>
<hr/>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama Mata Kuliah</label>
    <input type="text" class="form-control" name="nama_matakuliah" value="{{ $nilai->nama_matakuliah}}" readonly>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nilai Mahasiswa</label>
    <input type="text" class="form-control" name="nilai_mahasiswa" value="{{ $nilai->nilai_mahasiswa}}" readonly>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama_mahasiswa" value="{{ $nilai->nama_mahasiswa}}" readonly>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Program Studi</label>
    <input type="text" class="form-control" name="program_studi" value="{{ $nilai->program_studi}}" readonly>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Semester</label>
    <input type="text" class="form-control" name="semester" value="{{ $nilai->semester}}" readonly>

  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

@endsection