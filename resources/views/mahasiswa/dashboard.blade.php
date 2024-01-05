<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/dshbrd-mhs_sebelum-daftar.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/dshbrd-mhs_setelah-daftar.css') }}"> --}}
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
                <li class="sidebar-brand text-center" style="margin-bottom: 180px"></li>
                <li>
                    <div class="sidebar-link" onclick="location.href='/ukm'">
                        <div class="sidebar-link-text">UKM</div>
                    </div>
                    <div class="sidebar-link" onclick="location.href='/event'">
                        <div class="sidebar-link-text">Event</div>
                    </div>
                </li>
                <div class="sidebar-logout" onclick="location.href='/logout'">
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

        <!-- Header -->
        <div class="header-tel-u">
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-1"></div>
            </div>
            <div class="right-logo-outer"></div>
            <img class="right-profilepict-image" src="{{ Auth()->user()->foto }}" />
            <div class="svg-container">
                <svg style="z-index: 1;" width="473" height="400" viewBox="0 0 473 486" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="4.87122" y="62.1997" width="113.678" height="113.678"
                        transform="rotate(-48.4743 4.87122 62.1997)" fill="url(#paint0_linear_1_8)" />
                    <rect x="187.886" y="51.0886" width="113.678" height="113.678"
                        transform="rotate(-48.4743 187.886 51.0886)" fill="url(#paint1_linear_1_8)" />
                    <rect x="370.901" y="39.9775" width="113.678" height="113.678"
                        transform="rotate(-48.4743 370.901 39.9775)" fill="url(#paint2_linear_1_8)" />
                    <rect x="15.3157" y="234.234" width="113.678" height="113.678"
                        transform="rotate(-48.4743 15.3157 234.234)" fill="url(#paint3_linear_1_8)" />
                    <rect x="198.331" y="223.123" width="113.678" height="113.678"
                        transform="rotate(-48.4743 198.331 223.123)" fill="url(#paint4_linear_1_8)" />
                    <rect x="381.346" y="212.011" width="113.678" height="113.678"
                        transform="rotate(-48.4743 381.346 212.011)" fill="url(#paint5_linear_1_8)" />
                    <rect x="25.6713" y="404.804" width="113.678" height="113.678"
                        transform="rotate(-48.4743 25.6713 404.804)" fill="url(#paint6_linear_1_8)" />
                    <rect x="208.686" y="393.692" width="113.678" height="113.678"
                        transform="rotate(-48.4743 208.686 393.692)" fill="url(#paint7_linear_1_8)" />
                    <rect x="391.701" y="382.581" width="113.678" height="113.678"
                        transform="rotate(-48.4743 391.701 382.581)" fill="url(#paint8_linear_1_8)" />
                    <defs>
                        <linearGradient id="paint0_linear_1_8" x1="-11.8953" y1="8.81534" x2="161.94"
                            y2="227.488" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_1_8" x1="171.12" y1="-2.29574" x2="344.954"
                            y2="216.377" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_1_8" x1="354.135" y1="-13.4068" x2="527.969"
                            y2="205.265" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_1_8" x1="-1.45084" y1="180.849" x2="172.384"
                            y2="399.522" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint4_linear_1_8" x1="181.564" y1="169.738" x2="355.399"
                            y2="388.41" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint5_linear_1_8" x1="364.579" y1="158.627" x2="538.414"
                            y2="377.299" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint6_linear_1_8" x1="8.90475" y1="351.419" x2="182.74"
                            y2="570.092" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint7_linear_1_8" x1="191.92" y1="340.308" x2="365.755"
                            y2="558.98" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient id="paint8_linear_1_8" x1="374.935" y1="329.197" x2="548.77"
                            y2="547.869" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#D86636" />
                            <stop offset="1" stop-color="#D86636" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <h1 class="text-title">Halo, {{ Auth()->user()->nama }}</h1>
            <div class="row">
                <div class="col-md-8"></div>
            </div>
        </div>
        <!-- End of header -->

        <!-- isi -->
        <h4><b>Anda Belum mendaftar
                <br>UKM manapun</b></h4>
        <div class="row">
            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 147 147"
                fill="none" class="emoticon">
                <mask id="mask0_1426_7" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                    width="147" height="147">
                    <rect width="146.858" height="146.858" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_1426_7)">
                    <path
                        d="M94.846 67.3101C97.3956 67.3101 99.5628 66.4177 101.348 64.633C103.132 62.8483 104.025 60.6811 104.025 58.1315C104.025 55.5818 103.132 53.4147 101.348 51.6299C99.5628 49.8452 97.3956 48.9528 94.846 48.9528C92.2964 48.9528 90.1292 49.8452 88.3445 51.6299C86.5597 53.4147 85.6674 55.5818 85.6674 58.1315C85.6674 60.6811 86.5597 62.8483 88.3445 64.633C90.1292 66.4177 92.2964 67.3101 94.846 67.3101ZM52.0124 67.3101C54.562 67.3101 56.7292 66.4177 58.5139 64.633C60.2986 62.8483 61.191 60.6811 61.191 58.1315C61.191 55.5818 60.2986 53.4147 58.5139 51.6299C56.7292 49.8452 54.562 48.9528 52.0124 48.9528C49.4627 48.9528 47.2956 49.8452 45.5108 51.6299C43.7261 53.4147 42.8337 55.5818 42.8337 58.1315C42.8337 60.6811 43.7261 62.8483 45.5108 64.633C47.2956 66.4177 49.4627 67.3101 52.0124 67.3101ZM73.4292 82.6078C66.4942 82.6078 60.1966 84.571 54.5365 88.4974C48.8763 92.4239 44.7714 97.5996 42.2218 104.025H52.3183C54.562 100.251 57.545 97.2681 61.2675 95.0755C64.9899 92.8828 69.0438 91.7865 73.4292 91.7865C77.8145 91.7865 81.8684 92.8828 85.5909 95.0755C89.3133 97.2681 92.2964 100.251 94.54 104.025H104.637C102.087 97.5996 97.982 92.4239 92.3219 88.4974C86.6617 84.571 80.3642 82.6078 73.4292 82.6078ZM73.4292 134.62C64.9644 134.62 57.0096 133.014 49.5647 129.801C42.1198 126.589 35.6438 122.229 30.1366 116.722C24.6294 111.215 20.2696 104.739 17.0571 97.2936C13.8445 89.8487 12.2383 81.8939 12.2383 73.4292C12.2383 64.9644 13.8445 57.0096 17.0571 49.5647C20.2696 42.1198 24.6294 35.6438 30.1366 30.1366C35.6438 24.6294 42.1198 20.2696 49.5647 17.0571C57.0096 13.8445 64.9644 12.2383 73.4292 12.2383C81.8939 12.2383 89.8487 13.8445 97.2936 17.0571C104.739 20.2696 111.215 24.6294 116.722 30.1366C122.229 35.6438 126.589 42.1198 129.801 49.5647C133.014 57.0096 134.62 64.9644 134.62 73.4292C134.62 81.8939 133.014 89.8487 129.801 97.2936C126.589 104.739 122.229 111.215 116.722 116.722C111.215 122.229 104.739 126.589 97.2936 129.801C89.8487 133.014 81.8939 134.62 73.4292 134.62ZM73.4292 122.382C87.0952 122.382 98.6704 117.64 108.155 108.155C117.64 98.6704 122.382 87.0952 122.382 73.4292C122.382 59.7632 117.64 48.1879 108.155 38.7033C98.6704 29.2188 87.0952 24.4765 73.4292 24.4765C59.7632 24.4765 48.1879 29.2188 38.7033 38.7033C29.2188 48.1879 24.4765 59.7632 24.4765 73.4292C24.4765 87.0952 29.2188 98.6704 38.7033 108.155C48.1879 117.64 59.7632 122.382 73.4292 122.382Z"
                        fill="#949494" />
                </g>
            </svg>
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
    <!--  Wrapper sls -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script type="javascript"></script>
</body>

</html>
