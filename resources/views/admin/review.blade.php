<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/admin_review.css') }}">
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="text-center sidebar-header" onclick="location.href='admin_dashboard.html'"
                style="cursor: pointer;">
                <div class="text-center sidebar-icon">
                    <img class="sidebar-icon-image" src="{{ asset('images/logounit.png') }}" />
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand text-center" style="margin-bottom: 118px"></li>
                <li>
                    <div class="sidebar-link" onclick="location.href='/dashboard-admin'">
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
                <div class="col-1 justify-content-end" style="display: flex;">
                    <img src="{{ asset('images/admin_review_btn.png') }}" class="background-btn" role="button"
                        href="admin_dashboard.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46"
                        fill="none" class="arrow" role="button" onclick="location.href='/dashboard-admin'">
                        <path
                            d="M10.9969 25.5016L27.0969 41.3692L23 45.3362L0 22.6681L23 0L27.0969 3.96691L10.9969 19.8346H46V25.5016H10.9969Z"
                            fill="#A80000" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- end of header -->

        <!-- isi -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row" style="padding-left: 20px;">
                    <h2 class="nama-event mt-5 text-center"><b>{{ $event->judul }}</b></h2>
                    <h4 class="nama-ukm mt-5"><b>{{ $ukm->nama }}</b></h4>
                    <h5 class="mt-4"><b>Deskripsi</b></h5>
                    <div class="box1 mt-2 justify-content-center">
                        <p class="deskripsi mt-3">
                            {{ $event->deskripsi }}
                        </p>
                    </div>
                    <h5 class="mt-5"><b>Poster</b></h5>
                    <div class="box2 mt-4 justify-content-center">
                        <img src="{{ Storage::url($event->foto) }}" class="poster mt-4">
                    </div>
                    <div class="row mt-5">

                        <div class="status1 col-6">
                            <form action="/update-event-status/{{ $event->id }}/Decline" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn-primary-decline mt-5">Decline</button>
                            </form>
                        </div>
                        <div class="status2 col-6">
                            <form action="/update-event-status/{{ $event->id }}/Accepted" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn-primary-accepted mt-5">Accepted</button>
                            </form>
                        </div>
                    </div>
                </div>
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
