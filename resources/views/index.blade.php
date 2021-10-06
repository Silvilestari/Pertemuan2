@extends('layouts.master')


@section('judul')
Halaman Index
@endsection

@section('content')
<a class="btn btn-primary btn-lg" href="{{Route('album')}}>Album</a>
<a class="btn btn-primary btn-lg" href="{{Route('artis')}}>Artis</a>
@endsection
