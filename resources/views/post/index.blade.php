<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">





    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}">





    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>


    <!-- Topbar Start -->
    <div class="container-fluid">

        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="img/ads-700x70.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="/post/create" class="nav-item nav-link">Qoshish</a>
                    <a href="single.html" class="nav-item nav-link">Single News</a>

                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>


<center>
    <div style="width: 80%" class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
        <h3 class="m-0">Cotegoriyalar</h3>
        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
    </div>


    <nav style="width: 80%" class="navbar navbar-expand-lg bg-light">

        <div class="container-fluid">
          <a class="navbar-brand" href="#">Xammasi</a>
          <a class="navbar-brand" href="#sport">Sport</a>
          <a class="navbar-brand" href="#saralangan">Saralangan</a>
          <a class="navbar-brand" href="#tex">Texnologiya</a>
          <a class="navbar-brand" href="#biznes">Biznes</a>
          <a class="navbar-brand" href="#trend">Trend</a>


        </div>
      </nav>
    </center>
    <!-- Navbar End -->





    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3" id="#saralangan">
        <div class="container">

            @foreach ($posts as $item)
            @if ($item->cotegoriya == 8)

            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Saralangan</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">Oxirgi Xabar!</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">

                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{asset('storage/'.$item->image)}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="">{{$item->name}}</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">{{$item->created_at}}</a>

                            <a href="{{ route('post.show', $item->id) }}"><button type="button" style="border-radius: 100px" style="width:" class="btn btn-warning">T'oliq korish</button></a>

                            <form action="{{route('post.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border-radius: 100px" class="btn btn-danger">O'chirish</button>
                            </form>

                        </div>
                        <a class="h4 m-0 text-white" href="">{{$item->describtion}}</a>
                    </div>
                </div>
            </div>

            @endif
            @endforeach

        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 py-3" id="biznes">

                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Biznes</h3>
                    </div>
                    @foreach ($posts as $item)
                    @if ($item->cotegoriya == 5)
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">

                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$item->image)}}" style="width: 200px; height:225px" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 16px;">
                                        <a class="text-black" href="">{{$item->name}}</a>
                                        <span class="px-1 text-black">/</span>
                                        <a class="text-black" href="">{{$item->created_at}}</a>

                            <a href="{{ route('post.show', $item->id) }}"><button type="button" style="border-radius: 100px" class="btn btn-warning">T'oliq korish</button></a>



                            <form action="{{route('post.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border-radius: 100px" class="btn btn-danger">O'chirish</button>
                            </form>

                                                        </div>
                                    <a class="h4 m-0 text-black" href="">{{$item->describtion}}</a>
                                </div>
                            </div>
                    </div>
                    @endif
                    @endforeach
                </div>


                <div class="col-lg-6 py-3" id="tex">

                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Texnologiya</h3>
                    </div>
                    @foreach ($posts as $item)
                    @if ($item->cotegoriya == 6)
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$item->image)}}" style="width: 200px; height:225px" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 16px;">
                                    <a class="text-black" href="">{{$item->name}}</a>
                                    <span class="px-1 text-black">/</span>
                                    <a class="text-black" href="">{{$item->created_at}}</a>

                                    <a href="{{ route('post.show', $item->id) }}"><button type="button" style="border-radius: 100px" style="width:" class="btn btn-warning">T'oliq korish</button></a>

                                    <form action="{{route('post.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border-radius: 100px" class="btn btn-danger">O'chirish</button>
                                    </form>

                                </div>
                                <a class="h4 m-0 text-black" href="">{{$item->describtion}}</a>
                            </div>
                        </div>

                    </div>
                    @endif
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">

                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">O'yin-kulgi</h3>
                    </div>
                    @foreach ($posts as $item)
                    @if ($item->cotegoriya == 9)
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$item->image)}}" style="width: 200px; height:225px" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 16px;">
                                    <a class="text-black" href="">{{$item->name}}</a>
                                    <span class="px-1 text-black">/</span>
                                    <a class="text-black" href="">{{$item->created_at}}</a>

                                    <a href="{{ route('post.show', $item->id) }}"><button type="button" style="border-radius: 100px" style="width:" class="btn btn-warning">T'oliq korish</button></a>

                                    <form action="{{route('post.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border-radius: 100px" class="btn btn-danger">O'chirish</button>
                                    </form>

                                </div>
                                <a class="h4 m-0 text-black" href="">{{$item->describtion}}</a>
                            </div>
                        </div>

                    </div>
                    @endif
                    @endforeach

                </div>

                <div class="col-lg-6 py-3" id="sport">

                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Sport</h3>
                    </div>
                    @foreach ($posts as $item)
                    @if ($item->cotegoriya == 7)
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$item->image)}}" style="width: 200px; height:225px" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 16px;">
                                    <a class="text-black" href="">{{$item->name}}</a>
                                    <span class="px-1 text-black">/</span>
                                    <a class="text-black" href="">{{$item->created_at}}</a>

                                    <a href="{{ route('post.show', $item->id) }}"><button type="button" style="border-radius: 100px" style="width:" class="btn btn-warning">T'oliq korish</button></a>

                                    <form action="{{route('post.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border-radius: 100px" class="btn btn-danger">O'chirish</button>
                                    </form>

                                </div>
                                <a class="h4 m-0 text-black" href="">{{$item->describtion}}</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>




                    <!-- Popular News Start -->
                    <center>
                    <div style="width: 50%" class="pb-3" id="trend">
                        <div class="bg-light py-2 px-4 mb-3">
                            <center><h3 class="m-0">Trend</h3></center>
                        </div>

                        @foreach ($posts as $item)
                        @if ($item->cotegoriya == 10)

                        <div  class="d-flex mb-3">
                            <img class="img-fluid w-100" src="{{asset('storage/'.$item->image)}}" style="width: 200px; height:225px" style="object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-black" href="">{{$item->name}}</a>
                                    <span class="px-1 text-black">/</span>
                                    <a class="text-black" href="">{{$item->created_at}}</a>

                                    <a href="{{ route('post.show', $item->id) }}"><button type="button" style="border-radius: 100px" style="width:" class="btn btn-warning">T'oliq korish</button></a>

                                    <form action="{{route('post.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="border-radius: 100px" class="btn btn-danger">O'chirish</button>
                                    </form>

                                </div>
                                <a class="h4 m-0 text-black" href="">{{$item->describtion}}</a>
                            </div>
                        </div>

                        @endif
                        @endforeach

                    </div>
                </center>
                    <!-- Popular News End -->



    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Categories</h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Tags</h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                    <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.

			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="assets/js/main.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
