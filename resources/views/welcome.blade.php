@extends('layouts.main')

@section('content')

  {{-- Section: Home --}}
  @include('pages.home')

  {{-- Section: Tentang / About --}}
  @include('pages.tentang')

  {{-- Section: Layanan / Services --}}
  @include('pages.layanan')

  {{-- Section: Galeri --}}
  @include('pages.galeri')


@endsection
