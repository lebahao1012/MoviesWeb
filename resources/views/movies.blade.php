@push('css')
    <link rel="stylesheet" href="{{  asset('/frontend/style/style.css')}}">
@endpush

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="shortcut icon" href="./assets/images/4375011_logo_netflix_icon.png" type="image/x-icon" />
    @stack('css')
    <title>Neflix</title>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="home-background vh-100">
            <div class="row header px-5 m-0">
                <div class="d-flex col-8 align-items-center">
                    <img src="./assets/images/netflix.png" alt="Logo" width="100" class="me-4" />
                    <ul class="d-flex m-0">
                        <li class="list-unstyled me-4 text-white">
                            <a href="./index.html" class="text-white">Home</a>
                        </li>
                        <li class="list-unstyled me-4 text-white">
                            <a href="./shows.html" class="text-white">TV Shows</a>
                        </li>
                        <li class="list-unstyled me-4 text-white">
                            <a href="./movies.html" class="text-white">Movies</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex col-4 align-items-center justify-content-end">
                    <div class="header-icon">
                        <a href="./search.html"><img src="./assets/icon/icons8-search-50.png" alt="search-icon"
                                width="20" height="20" /></a>
                    </div>
                    <div class="header-icon ms-3">
                        <a href="./profile.html">
                            <img src="./assets/icon/icons8-person-50.png" alt="person-icon" width="20"
                                height="20" />
                        </a>
                    </div>
                    <div class="header-icon ms-3">
                        <a href="./signin.html">
                            <img src="./assets/icon/icons8-log-out-26.png" alt="logout-icon" width="20"
                                height="20" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="row px-5 content-title me-0">
                <h1 class="text-white fw-bold mb-3">Need for Speed</h1>
                <p class="text-white fw-bold">Season 1, Episode 1</p>
                <div class="d-flex">
                    <button class="btn btn-play col-1 d-flex align-items-center justify-content-center me-3">
                        <img src="./assets/icon/icons8-play-24.png" alt="icon-play" />
                        <p class="text-white p-0 m-0">Play</p>
                    </button>
                    <button class="btn btn-mute col- d-flex align-items-center justify-content-center">
                        <img src="./assets/icon/icons8-mute-24.png" alt="icon-mute" />
                    </button>
                </div>
            </div>
        </div>
        <div class="home-tvshows px-5 py-3 bg-black">
            <div class="row">
                <h3 class="text-white fw-bold">TV Shows</h3>
            </div>
            <div class="row mb-4">
                <p class="text-white">Action & adventure</p>
                <div>
                    <img src="./entities/thumbnails-real-images/mi.jpg" alt="" width="200" height="100"
                        class="me-3" /><img src="./entities/thumbnails-real-images/mec.jpg" alt=""
                        width="200" height="100" class="me-3" /><img
                        src="./entities/thumbnails-real-images/nfs.jpg" alt="" width="200" height="100"
                        class="me-3" /><img src="./entities/thumbnails-real-images/nbd.jpg" alt=""
                        width="200" height="100" />
                </div>
            </div>
            <div class="row mb-4">
                <p class="text-white">Comedies</p>
                <div>
                    <img src="./entities/thumbnails-real-images/friends.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/bnn.jpg" alt="" width="200" height="100"
                        class="me-3" />
                    <img src="./entities/thumbnails-real-images/sb.jpg" alt="" width="200" height="100"
                        class="me-3" />
                    <img src="./entities/thumbnails-real-images/tss.jpg" alt="" width="200"
                        height="100" class="me-3" /><img src="./entities/thumbnails-real-images/tid.jpg"
                        alt="" width="200" height="100" />
                </div>
            </div>
            <div class="row mb-4">
                <p class="text-white">Dramas</p>
                <div>
                    <img src="./entities/thumbnails-real-images/got.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/Suits.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/man.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/yel.jpg" alt="" width="200"
                        height="100" class="me-3" /><img src="./entities/thumbnails-real-images/dm.jpg"
                        alt="" width="200" height="100" />
                </div>
            </div>
            <div class="row mb-4">
                <p class="text-white">Sci - Fi & Fantasy</p>
                <div>
                    <img src="./entities/thumbnails-real-images/tra.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/mib.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/int.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/gra.jpg" alt="" width="200"
                        height="100" class="me-3" />
                </div>
            </div>
            <div class="row mb-4">
                <p class="text-white">Thrillers</p>
                <div>
                    <img src="./entities/thumbnails-real-images/jp.jpg" alt="" width="200" height="100"
                        class="me-3" />
                    <img src="./entities/thumbnails-real-images/d9.jpg" alt="" width="200" height="100"
                        class="me-3" />
                    <img src="./entities/thumbnails-real-images/its.jpg" alt="" width="200"
                        height="100" class="me-3" />
                </div>
            </div>
            <div class="row mb-4">
                <p class="text-white">Children & family</p>
                <div>
                    <img src="./entities/thumbnails-real-images/monsterfamily.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/cwc.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/cu.jpg" alt="" width="200" height="100"
                        class="me-3" />
                </div>
            </div>
            <div class="row mb-4">
                <p class="text-white">Music</p>
                <div>
                    <img src="./entities/thumbnails-real-images/som.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/hs.jpg" alt="" width="200" height="100"
                        class="me-3" />
                    <img src="./entities/thumbnails-real-images/tid.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/bel.jpg" alt="" width="200"
                        height="100" class="me-3" />
                </div>
            </div>
            <div class="row mb-4">
                <p class="text-white">Cartoon</p>
                <div>
                    <img src="./entities/thumbnails-real-images/ninj.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/ttg.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/ppg.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/sbsp.jpg" alt="" width="200"
                        height="100" class="me-3" />
                    <img src="./entities/thumbnails-real-images/jb.jpg" alt="" width="200" height="100"
                        class="me-3" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
