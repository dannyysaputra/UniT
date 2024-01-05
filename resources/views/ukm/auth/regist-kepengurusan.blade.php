<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>register ukm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- g-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/register_ukm.css') }}" />
</head>

<body>
    <img class="regis-bg" src="{{ asset('images/Regis_UKM.png') }}" width="100%" />
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="register-ukm mt-5">
                    <div class="row" style="width: 950px">
                        <div class="col-lg-12">
                            <form class="form" action="create-ukm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-white text-center"><b>Register</b></h3>
                                <br />

                                <div class="form-group">
                                    <div class="group8">
                                        <label for="kepengurusan" class="lebal-email9 custom-label">Struktur dan Bagan
                                            Kepengurusan Organisasi</label>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="card card-kepengurusan-ex text-center">
                                                    <img src="{{ asset('images/regis-kepengurusan.png') }}"
                                                        style="background-color: #e6e6e6"
                                                        class="card-img-top card-img-p-2" alt="" />
                                                    <p class="card-title card-kepengurusan-title text-white">
                                                        <br />
                                                        Nama <br />Jabatan <br />
                                                        Jurusan
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="card card-kepengurusan">
                                                    <svg style="cursor: pointer" width="80" height="80"
                                                        xmlns="http://www.w3.org/2000/svg" width="119"
                                                        height="119" viewBox="0 0 119 119" fill="none">
                                                        <circle cx="59.5" cy="59.5" r="59.5" fill="#EAEAEA"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalCenter" />
                                                        <rect x="51" y="15" width="18" height="89"
                                                            rx="9" fill="#D64838" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalCenter" />
                                                        <rect x="15.5" y="68.5" width="18" height="89"
                                                            rx="9" transform="rotate(-90 15.5 68.5)"
                                                            fill="#D64838" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalCenter" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-5" style="margin-bottom: 90px">
                                    <button type="submit" class="btn btn-secondary btn-sm btn-custom-login-white">
                                        <b>Register</b>
                                        </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: auto; color: transparent">
                <div class="modal-body text-center">
                    <div class="cardpopup">
                        <div class="card-1">
                            <br /><br />
                            <svg width="150" height="79" viewBox="0 0 105 79" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M56.0816 78.8857V56.3469H71.0367L52.3428 33.8082L33.649 56.3469H48.6041V78.8857H29.9102V78.6979C29.2821 78.7355 28.6839 78.8857 28.0408 78.8857C20.6039 78.8857 13.4716 75.9175 8.21296 70.6339C2.95429 65.3504 0 58.1843 0 50.7123C0 36.2574 10.8798 24.4771 24.8404 22.8618C26.0644 16.433 29.4798 10.6336 34.4992 6.46111C39.5186 2.28866 45.8282 0.00396693 52.3428 0C58.8583 0.00366378 65.169 2.28808 70.1896 6.46044C75.2103 10.6328 78.6272 16.4324 79.8527 22.8618C93.8133 24.4771 104.678 36.2574 104.678 50.7123C104.678 58.1843 101.724 65.3504 96.4652 70.6339C91.2066 75.9175 84.0743 78.8857 76.6374 78.8857C76.0093 78.8857 75.4036 78.7355 74.768 78.6979V78.8857H56.0816Z"
                                    fill="url(#paint0_linear_1_505)" />
                                <defs>
                                    <linearGradient id="paint0_linear_1_505" x1="52.3391" y1="0"
                                        x2="52.3391" y2="78.8857" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0572917" stop-color="#A80000" />
                                        <stop offset="0.791667" stop-color="#DB5F1E" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <br />
                            <br />
                            <span style="font-weight: 200; color: black">Drag and Drop File OR
                            </span>
                            <br />
                            <br />
                            <button type="button" class="btn btn-secondary btn-sm btn-custom"
                                onclick="triggerFileInput()">
                                Browse
                            </button>
                        </div>
                        <div class="rightpopup">
                            <div class="containerpopup">
                                <div class="group8-modal">
                                    <input required="true" class="main-input8-modal" type="text" />
                                    <span class="highlight-span8-modal"></span>
                                    <label class="lebal-email8-modal">Nama</label>
                                </div>
                            </div>
                            <div class="containerpopup">
                                <div class="group8-modal">
                                    <input required="true" class="main-input8-modal" type="text" />
                                    <span class="highlight-span8-modal"></span>
                                    <label class="lebal-email8-modal">Jabatan</label>
                                </div>
                            </div>
                            <div class="containerpopup">
                                <div class="group8-modal">
                                    <input required="true" class="main-input8-modal" type="text" />
                                    <span class="highlight-span8-modal"></span>
                                    <label class="lebal-email8-modal">Jurusan</label>
                                </div>
                            </div>
                            <div class="modal-body" style="text-align: end">
                                <a href="#"><button type="button" class="btn btn-light" data-dismiss="modal">
                                        Ok
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
