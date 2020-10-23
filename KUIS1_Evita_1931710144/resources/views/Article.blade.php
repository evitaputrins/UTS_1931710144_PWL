@extends('layouts.Master')

@section('title',' Article ')
    
@section('content')

 <!-- Page Content -->
 <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{ $article->title }}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="https://www.instagram.com/evitapns/">Evita Putri</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 4, 2020 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ $article->imageurl }}" alt="">

        <hr>

        <!-- Post Content -->
        {{$article->content}}

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="data:image/jpeg;base64,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" alt="">
          <div class="media-body">
            <h5 class="mt-0">Tom Holland</h5>
            It's a great website!!
            </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="data:image/jpeg;base64,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" alt="">
          <div class="media-body">
            <h5 class="mt-0">Kim Seok Woo</h5>
            I Love Indonesia. xoxo
            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS4aZLxkL9wRhSkTe2_oCLbxu8-dP8HUhcxtQ&usqp=CAU" alt="">
              <div class="media-body">
                <h5 class="mt-0">Taylor Swift</h5>
                Maybe the website can be completed..
                </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRI8-A6JjcDyzKoJdkjTyAw8reFbyPnmEEeag&usqp=CAU" alt="">
              <div class="media-body">
                <h5 class="mt-0">Kim Ji Won</h5>
                The website is very helpful^^
                </div>
            </div>

          </div>
        </div>

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
              <a href="https://www.google.com">
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
        <h5 class="card-header">Warning!!!</h5>
          <div class="card-body">
          if you want to travel, then you have to work hard so that what you dream can be achieved without causing trouble to other people. Spirit, effort will not betray results!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  @endsection