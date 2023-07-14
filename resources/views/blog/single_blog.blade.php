<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
                    <a class="nav-link" aria-current="page" href="{{ route('blog.index') }}">Home</a>
                  </li>
                  <li class="nav-item fs-5 fw-semibold">
                    <a class="nav-link" href="{{ route('blog.all') }}">Blogs</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="container mt-3" >
            <h3 class="mb-3">Featured Posts</h3>
                <div class="card mb-3">
                    <img src="{{ asset('asset/'.$comment->image)}}" class="card-img-top" style="height: 400px; object-fit: cover;" alt="Blog Image" >
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $comment->title }}
                        </h5>
                        <p class="card-text" style="transform: translateY(-10px);">
                            <small class="text-body-secondary fw-semibold" style="color: blue;">
                                {{ $comment->author }}
                                <span>
                                    <i class="fa-solid fa-circle" style="font-size: 8px; color: gray;margin-left: 5px;margin-right: 5px;"></i>
                                </span>
                            </small>
                            <span>{{ $comment->created_at->format('F j, Y') }}</span>
                        </p>
                        <p class="card-text" style="transform:translateY(-15px);">
                            <span style="max-width: 100%;">
                                {{ $comment->body }}
                            </span>

                        </p>

                    </div>

                </div>
                <div class="container">

                    <div class="row">
                        <div class="col-sm-5 col-md-6 col-12 pb-4">
                            <h3>Comments</h3>
                            @foreach ($comment->comments as $item)
                                <div class="comment mt-4 text-justify float-left border px-4 py-2 rounded">
                                    <div class="d-flex">
                                        <img src="{{asset('asset/user.png')}}" alt="" class="rounded-circle me-4" width="40" height="40">
                                        <p>{{ $item->comment}}</p>
                                    </div>
                                    <small style="text-align: right ; display: block;">- {{ $item->created_at->format('F j, Y') }}</small>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>

          </div>



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
