<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Unit</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="text-center sidebar-header" onclick="location.href='/dashboard-ukm'" style="cursor: pointer;">
                <div class="text-center sidebar-icon">
                    <img class="sidebar-icon-image" src="{{ asset('images/logo.png') }}" />
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand text-center" style="margin-bottom: 180px"></li>
                <li>
                    <div class="sidebar-link active" onclick="location.href='/upload-proposal'">
                        <div class="sidebar-link-text">Upload <br />Proposal</div>
                    </div>
                    <div class="sidebar-link" onclick="location.href='/daftar-pendaftar'">
                        <div class="sidebar-link-text">Daftar <br />Pendaftar</div>
                    </div>
                    <div class="sidebar-link" onclick="location.href='/history'">
                        <div class="sidebar-link-text">History <br />Pendaftar</div>
                    </div>
                </li>
                <div class="sidebar-logout" onclick="location.href='/signout'">
                    <div class="sidebar-logout-icon">
                        Log out
                    </div>
                    <svg class="vector" width="24" height="37" viewBox="0 0 24 37" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.2857 0H1.71429C1.25963 0 0.823594 0.19491 0.502103 0.541852C0.180612 0.888795 0 1.35935 0 1.85V18.5L8.57143              11.1V16.65H18.8571V20.35H8.57143V25.9L0 18.5V35.15C0 35.6406 0.180612 36.1112 0.502103 36.4581C0.823594 36.8051 1.25963 37 1.71429 37H22.2857C22.7404 37 23.1764 36.8051 23.4979 36.4581C23.8194 36.1112 24 35.6406 24 35.15V1.85C24 1.35935 23.8194 0.888795 23.4979 0.541852C23.1764 0.19491 22.7404 0 22.2857 0Z"
                            fill="white" />
                    </svg>
                </div>
            </ul>
        </div>
        <!--Sidebar -->

        <!-- Header -->
        <div class="header-tel-u" style="height: 250px;">
            <div class="row">
                <div class="col-lg-6">
                    <svg width="514" height="250" viewBox="0 0 714 329" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="362.622" y="283.32" width="113.678" height="113.678"
                            transform="rotate(-169.15 362.622 283.32)" fill="url(#paint0_linear_1_18)" />
                        <rect x="259.696" y="131.583" width="113.678" height="113.678"
                            transform="rotate(-169.15 259.696 131.583)" fill="url(#paint1_linear_1_18)" />
                        <rect x="505.255" y="186.57" width="113.678" height="113.678"
                            transform="rotate(-169.15 505.255 186.57)" fill="url(#paint2_linear_1_18)" />
                        <rect x="402.328" y="34.8328" width="113.678" height="113.678"
                            transform="rotate(-169.15 402.328 34.8328)" fill="url(#paint3_linear_1_18)" />
                        <rect x="646.674" y="90.6423" width="113.678" height="113.678"
                            transform="rotate(-169.15 646.674 90.6423)" fill="url(#paint4_linear_1_18)" />
                        <defs>
                            <linearGradient id="paint0_linear_1_18" x1="345.856" y1="229.936" x2="519.69"
                                y2="448.608" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_1_18" x1="242.929" y1="78.1989" x2="416.764"
                                y2="296.871" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_1_18" x1="488.488" y1="133.185" x2="662.323"
                                y2="351.857" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_1_18" x1="385.562" y1="-18.5516" x2="559.397"
                                y2="200.121" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_1_18" x1="629.907" y1="37.258" x2="803.742"
                                y2="255.93" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#D86636" />
                                <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="col-lg-1"></div>
            </div>
            <div class="right-logo-outer"></div>
            <img class="right-logo-image" src="{{ asset($ukm->logo) }}" />
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-4" style="z-index: 3; margin-left: 87%;"><a href="edit.html"
                        style="cursor: pointer;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 65 65"
                            fill="none">
                            <mask id="mask0_1_106" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="65" height="65">
                                <rect width="64.4139" height="64.4139" fill="white" />
                            </mask>
                            <g mask="url(#mask0_1_106)">
                                <path
                                    d="M6 59V49.3636H58V59H6ZM16.4 39.7273H20.04L40.32 20.9966L36.615 17.5636L16.4 36.3545V39.7273ZM11.2 44.5455V34.3068L40.32 7.38523C40.7967 6.94356 41.3492 6.60227 41.9775 6.36136C42.6058 6.12045 43.2667 6 43.96 6C44.6533 6 45.325 6.12045 45.975 6.36136C46.625 6.60227 47.21 6.96364 47.73 7.44545L51.305 10.8182C51.825 11.2598 52.2042 11.7818 52.4425 12.3841C52.6808 12.9864 52.8 13.6087 52.8 14.2511C52.8 14.8534 52.6808 15.4456 52.4425 16.0278C52.2042 16.61 51.825 17.142 51.305 17.6239L22.25 44.5455H11.2Z"
                                    fill="white" />
                            </g>
                        </svg></a>
                </div>
            </div>
        </div>
        <!-- Header -->

        <!--Data -->

        <div id="page-content-wrapper" style="position: absolute;">
            <form action="submit-proposal" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="judul" class="custom-label">Judul Event</label>
                                <br />
                                <input type="text" class="form-control custom-input" name="judul"
                                    id="judul"><br />
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="custom-label">Deskripsi</label>
                                <br>
                                <input type="text" class="form-control custom-input" name="deskripsi"
                                    id="deskripsi">
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="tgl_mulai" class="custom-label">Tanggal Mulai</label>
                                <br>
                                <input type="date" class="form-control custom-input" name="tgl_mulai"
                                    id="tgl_mulai">
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai" class="custom-label">Tanggal Selesai</label>
                                <br>
                                <input type="date" class="form-control custom-input" name="tgl_selesai"
                                    id="tgl_selesai">
                                <br>
                            </div>
                            <div class="form-group pt-4">
                                <label for="upload" class="custom-label">Upload Foto</label>
                                <div class="card custom-input text-center p-3">
                                    <div id="upload-section">
                                        <svg width="950" height="79" viewBox="0 0 105 79" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M56.0816 78.8857V56.3469H71.0367L52.3428 33.8082L33.649 56.3469H48.6041V78.8857H29.9102V78.6979C29.2821 78.7355 28.6839 78.8857 28.0408 78.8857C20.6039 78.8857 13.4716 75.9175 8.21296 70.6339C2.95429 65.3504 0 58.1843 0 50.7123C0 36.2574 10.8798 24.4771 24.8404 22.8618C26.0644 16.433 29.4798 10.6336 34.4992 6.46111C39.5186 2.28866 45.8282 0.00396693 52.3428 0C58.8583 0.00366378 65.169 2.28808 70.1896 6.46044C75.2103 10.6328 78.6272 16.4324 79.8527 22.8618C93.8133 24.4771 104.678 36.2574 104.678 50.7123C104.678 58.1843 101.724 65.3504 96.4652 70.6339C91.2066 75.9175 84.0743 78.8857 76.6374 78.8857C76.0093 78.8857 75.4036 78.7355 74.768 78.6979V78.8857H56.0816Z"
                                                fill="url(#paint0_linear_1_505)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1_505" x1="52.3391"
                                                    y1="0" x2="52.3391" y2="78.8857"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0572917" stop-color="#A80000" />
                                                    <stop offset="0.791667" stop-color="#DB5F1E" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <br> <br>
                                        <span style="font-weight: 200;">Drag and Drop File OR </span>
                                        <br> <br>
                                        <button type="button" class="btn btn-secondary btn-sm btn-custom"
                                            onclick="triggerFileInput()">Browse</button>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <!--  Masukan file  -->
                                        <input type="file" id="fileInput" style="display: none;"
                                            onchange="handleFileSelect()" name="foto" id="foto">
                                        <p id="selectedFileDisplay"></p>
                                    </div>
                                </div>
                                {{-- <div class="text-center mb-5 mt-5">
                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        class="btn btn-secondary btn-sm btn-custom">
                                        Save
                                    </button>
                                    <br>
                                </div> --}}
                            </div>
                            <div class="text-center mb-5 mt-5">
                                <button type="submit" class="btn btn-secondary btn-sm btn-custom">
                                    Save
                                </button>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <footer class="footer" style="margin-left : -20px; margin-bottom : -20px;">
                <div class="footer-left">
                    <h1><strong>Kontak</strong></h1>
                    <div class="img_">
                        <img src="{{ asset('images/footer.png') }}" width="400px" alt="">
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
        </div>
        <!-- Data Sls -->

    </div>
    <!-- Wrapper -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content custom-modal p-3">
                <div class="modal-body text-center">
                    <h3>Proposal berhasil diajukan</h3>
                    <br>
                    <svg width="100" height="100" viewBox="0 0 151 151" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="75.5" cy="75.5" r="75.5" fill="white" />
                        <mask id="mask0_1_455" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="14" y="17"
                            width="121" height="121">
                            <rect x="14" y="17" width="121" height="121" fill="#D9D9D9" />
                        </mask>
                        <g mask="url(#mask0_1_455)">
                            <path
                                d="M62.1484 107.75L33.4109 79.0123L40.5953 71.8279L62.1484 93.3811L108.406 47.1238L115.59 54.3082L62.1484 107.75Z"
                                fill="black" />
                        </g>
                    </svg>
                    <br>
                    <br>
                    <a href="index.html" class="btn btn-secondary btn-sm btn-custom-secondary">OK </a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script type="javascript"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
