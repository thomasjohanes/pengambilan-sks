@extends('layouts.app')

@section('content')
  <div class="container mt-5">
    <h2>Selamat Datang, {{ $data['nama'] }}</h2>
    <p>NIM: {{ $data['nim'] }}</p>
    <p>Jurusan: {{ $data['jurusan'] }}</p>
  </div>
@endsection
