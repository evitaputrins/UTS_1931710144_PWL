@extends('layouts.Master')

@section('title', 'Home')
    
@section('content')
    

<!-- Page Content -->
<div class="container">
  
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
  
      <h1 class="my-4">FIND NEW ADVENTURES,
          <small>and ENJOY!</small>
        </h1>
  
        <!-- Blog Post -->
        @foreach ($article as $artic)
        <div class="card mb-4">
            <img class="card-img-top" src="{{ $artic->imageurl }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $artic->title }}</h2>
            <p class="card-text">{{ Str::limit($artic->content, 100, '...') }}</p>
                <a href="{{ './article/'.$artic->id }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">Posted on {{ $artic->created_at }} by
                <a href="https://www.instagram.com/evitapns/">Evita Putri Nauli Simanungkalit</a>
            </div>
        </div>
        @endforeach
  
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Prev</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Next &rarr;</a>
          </li>
        </ul>
  
      </div>
  
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
  
        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
              <a href="https://www.google.com"></a>
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
  
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="https://www.liputan6.com/lifestyle/read/2264201/6-destinasi-wisata-keluarga-terindah-di-dunia">With Family</a>
                  </li>
                  <li>
                    <a href="https://www.skyscanner.co.id/berita/10-destinasi-seru-untuk-liburan-bersama-teman-teman">With Best Friend</a>
                  </li>
                  <li>
                    <a href="https://www.idntimes.com/travel/destination/reza-iqbal/20-wisata-paling-romantis-di-dunia/3">With Lover</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="https://tempatwisataunik.com/wisata-dunia/wisata-pantai-terbaik-dunia">Beach</a>
                  </li>
                  <li>
                    <a href="https://travel.kompas.com/read/2019/09/16/060100227/15-tempat-wisata-di-malang-dan-batu-cocok-untuk-keluarga?page=all">Park</a>
                  </li>
                  <li>
                    <a href="https://tempatwisataunik.com/wisata-dunia/wisata-gunung-dunia">Mountain</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Hello!</h5>
          <div class="card-body">
          I hope this website can help find tourist destinations. Enjoy, Guys.
           </div>
        </div>
  
      </div>
  
    </div>
    <!-- /.row -->
  
  </div>
  @endsection