<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    .banner {
        position: relative;
        height: 500px;
        background-image:url("{{url('asset/banner.jpg')}}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }

    .content h1 {
        font-size: 32px;
        margin-bottom: 20px;
    }

    .content p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .content a {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
    }
    </style>
</head>
<body>

    <div>
        {{-- Navbar starts here --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand w-25" href="{{ route('blog.index') }}">
                <img style="width: 50px;" src="{{asset('asset/logo.png')}}" alt="logo_img">
                <span class="fw-bold">Blogger</span>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item me-5 fs-5 fw-semibold">
                    <a class="nav-link active" aria-current="page" href="{{ route('blog.index') }}">Home</a>
                  </li>
                  <li class="nav-item fs-5 fw-semibold">
                    <a class="nav-link" href="{{ route('blog.all') }}">Blogs</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          {{-- Banner section starts here --}}
          <div class="banner">
            <div class="overlay"></div>
            <div class="content">
                <h1>Publish your passions, your way</h1>
                <p>Here's some unique and beautiful blogs</p>
                <a href="{{ route('blog.all') }}" class="btn btn-primary">Show Blogs</a>
            </div>
          </div>
          {{-- Featured Posts section starts here --}}
          <div class="container mt-5" >
            <h3 class="mb-3">Featured Posts</h3>
            @foreach ($blogs as $blog)
                <div class="card mb-3">
                    <img src="{{ asset('asset/'.$blog->image)}}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Blog Image" >
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $blog->title }}
                        </h5>
                        <p class="card-text" style="transform: translateY(-10px);">
                            <small class="text-body-secondary fw-semibold" style="color: blue;">
                                {{ $blog->author }}
                                <span>
                                    <i class="fa-solid fa-circle" style="font-size: 8px; color: gray;margin-left: 5px;margin-right: 5px;"></i>
                                </span>
                            </small>
                            <span>{{ $blog->created_at->format('F j, Y') }}</span>
                        </p>
                        <p class="card-text" style="transform:translateY(-15px);">
                            <span class="d-inline-block text-truncate" style="max-width: 100%; height:40px;">
                                {{ $blog->body }}
                            </span>
                            <a href="{{ route('blog.single',$blog->id) }}" class="btn btn-primary btn-sm">Read More</a>
                        </p>

                    </div>

                </div>
            @endforeach

          </div>
          
          <div class="d-flex justify-content-center">

            {{ $blogs->links() }}

          </div>
          {{-- Footer section starts here --}}
          <footer class="w-100 bg-dark mt-3" style="line-height: 50px;">
            <div class="container text-center text-white fw-semibold">
                <img style="width: 40px" src="{{asset('asset/logo.png')}}" alt="logo">
                Blogger
                <small>&copy;2023 All Rights Reserved</small>
            </div>
          </footer>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
