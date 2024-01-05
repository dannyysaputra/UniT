<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/admin_dashboard.css') }}">
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="text-center sidebar-header">
                <div class="text-center sidebar-icon">
                    <img class="sidebar-icon-image" src="{{ asset('images/logounit.png') }}" />
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand text-center" style="margin-bottom: 118px"></li>
                <li>
                    <div class="sidebar-link" onclick="location.href='admin_dashboard.html'">
                        <div class="sidebar-link-text">Pengajuan <br> Proposal</div>
                    </div>
                </li>
                <div class="sidebar-logout" onclick="location.href='/signout-admin'">
                    <div class="sidebar-logout-icon">
                        Log out
                    </div>
                    <svg class="vector" width="24" height="37" viewBox="0 0 24 37" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.2857 0H1.71429C1.25963 0 0.823594 0.19491 0.502103 0.541852C0.180612 0.888795 0 1.35935 0 1.85V18.5L8.57143 11.1V16.65H18.8571V20.35H8.57143V25.9L0 18.5V35.15C0 35.6406 0.180612 36.1112 0.502103 36.4581C0.823594 36.8051 1.25963 37 1.71429 37H22.2857C22.7404 37 23.1764 36.8051 23.4979 36.4581C23.8194 36.1112 24 35.6406 24 35.15V1.85C24 1.35935 23.8194 0.888795 23.4979 0.541852C23.1764 0.19491 22.7404 0 22.2857 0Z"
                            fill="white" />
                    </svg>
                </div>
            </ul>
        </div>
        <!-- Sidebar -->

        <!-- header -->
        <div class="row" style="height: 183px;">
            <div class="header">
                <img src="{{ asset('images/headerkiri_admin.png') }}" class="left-header">
                <img src="{{ asset('images/admin_header.png') }}" class="header-bg" style="width: 90%;">
                <div>
                    <img src="{{ asset('images/pp-admin.png') }}" class="pp-admin">
                    <p class="pp-admin-deskripsi">{{ $admin->nama }}</p>
                </div>
            </div>
        </div>

        <!-- end of header -->

        <!-- isi -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                @foreach ($ukms as $ukm)
                    @foreach ($ukm->events as $event)
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="ukm1 col-1">
                                        <img src="{{ asset($ukm->logo) }}" style="width: auto;">
                                    </div>
                                    <div class="namaukm col-8">
                                        <b>{{ $ukm->nama }}</b>
                                        <p class="judulevent">{{ $event->judul }}</p>
                                    </div>
                                    <div class="col-3">
                                        <div class="btn-primary-review" onclick="location.href='/review/{{ $event->id }}'" role="button"
                                            style="cursor: pointer;"><b>{{ $event->status }}</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        <!-- end of isi -->

        <!-- footer -->
        <footer class="footer mt-5">
            <div class="footer-left">
                <h1><strong>Kontak</strong></h1>
                <div class="img_">
                    <img src="{{ asset('images/footer.png') }}" width="300px" alt="">
                </div><br>
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Indonesia</span> Bandung,Jawa Barat</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>(022) 7566456</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">uniT@telkomuniversity.ac.id</a></p>
                </div>
            </div>


            <div class="footer-right">
                <div class="footer-media">
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>

                <p class="footer-about">
                    <span>About</span>
                    Di Channel ini kita akan berbagi barbagai Tutorial design, Pemograman dan lain-lain. Silahkan
                    subscribe untuk kemajuan channel ini, jangan lupa, like dan comments. agar channel ini semakin
                    berkembang
                </p>
            </div>
        </footer>
        <!-- end of footer -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
