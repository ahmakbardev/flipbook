<!DOCTYPE html>
<html>

  <head>
  <link rel="shortcut icon" href="{{ asset("logo.png") }}">
  <title>Flipbook Viewer</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="DC.publisher" content="Tahta Media Group" />
<meta name="DC.date" content="2024-01-01" />
<meta name="DC.type" content="Book" />
<meta name="DC.type" content="PeerReviewed" />
<meta name="DC.format" content="text" />
<meta name="DC.language" content="en" />
<meta name="DC.identifier" content="http://repository.um.ac.id/5409/1/fullteks.pdf" />
<meta name="DC.format" content="image" />
<meta name="DC.language" content="en" />
<meta name="DC.identifier" content="http://repository.um.ac.id/5409/2/cover.jpeg" />
  <!-- AJAX -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- costume css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/flipbook.style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css')}}">
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Include JS -->
  <script src="{{ asset('js/flipbook.min.js')}}"></script>

  <script type="text/javascript">

      $(document).ready(function () {
          $("#read").flipBook({
            //Layout Setting
            pdfUrl: '{{ Storage::url($pdf->file_path) }}',

            lightBox:true,
            layout:3,
            currentPage:{vAlign:"bottom", hAlign:"left"},
            // BTN SETTING
            btnShare : {enabled:false},
            btnPrint : {
              hideOnMobile:true
            },
            btnDownloadPages : {
              enabled: true,
              url: '{{ Storage::url($pdf->file_path) }}',
              name: '{{ $pdf->title }}.pdf',
              icon: "fa-download",
              icon2: "file_download",
              hideOnMobile:false
            },
            btnColor:'rgb(255,120,60)',
            sideBtnColor:'rgb(255,120,60)',
            sideBtnSize:60,
            sideBtnBackground:"rgba(0,0,0,.7)",
            sideBtnRadius:60,
            btnSound:{vAlign:"top", hAlign:"left"},
            btnAutoplay:{vAlign:"top", hAlign:"left"},
            // SHARING
            btnShare : {
                enabled: true,
                title: "Share",
                icon: "fa-share-alt"
            },
            facebook : {
                enabled: true,
                url: "{{ route('details', $pdf) }}"
            },
            email : {
                enabled: true,
                url: "{{ route('details', $pdf) }}",
                title: "PDF KPK",
                description: "Silahkan click link di bawah untuk melihat / mengunduh pdf"
            },
            twitter : {
                enabled: true,
                url: "{{ route('details', $pdf) }}"
            },
            pinterest : {
                enabled: true,
                url: "{{ route('details', $pdf) }}"
            }
        });
      })
  </script>

  <style>
    body {
      background-color: #f6f6f6;
    }
    #author {
      font-size: 15px;
      font-weight: bold;
      color: #0186c9;
    }
    #date {
      margin-left: 10px;
      font-size: 15px;
      color: #819196;
    }
    #size {
      font-size: 15px;
      color: #819196;
    }
    #description {
      margin-top: 20px;
      font-weight: lighter;
    }

    header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 1rem 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 5;
    }

    .logo {
    width: 40px;
    }

    .nav-item {
    position: relative;
    color: #010101;
    font-size: 1rem;
    font-weight: 500;
    line-height: 25px;
    letter-spacing: -0.13px;
    text-decoration: none;
    margin-left: 2.5rem;
    transition: all 0.5s ease;
    }

    .nav-item:hover {
    color: rgb(168, 239, 255, 0.9);
    }

    .nav-item::after {
    content: "";
    position: absolute;
    bottom: -0.3rem;
    left: 50%;
    width: 0;
    height: 0.15rem;
    transform: translateX(-50%);
    background-color: rgb(168, 239, 255, 0.9);
    transition: all 0.5s ease;
    }

    .nav-item:hover::after {
    width: 100%;
    }

    .icons {
    position: absolute;
    right: 5%;
    font-size: 2.3rem;
    color: #fff;
    cursor: pointer;
    display: none;
    }

    #check {
    display: none;
    }
  </style>

  </head>

  <body>

  <!-- Navbar -->
  <header>
    <a href="/" style="color: black; font-weight: bold;"
    ><img
      src="{{ asset('logo.png') }}"
      alt="logo"
      class="logo"
  /> Flipbook</a>

    <input type="checkbox" id="check" />
    <label for="check" class="icons">
      <i class="bx bx-menu" id="menu-icon"></i>
      <i class="bx bx-x" id="close-icon"></i>
    </label>
  </header>
  <!-- End Of Navbar -->

  <br><br><br><br><br>

  <!-- PDF INFORMATION -->
  <section class="info" id="info">
    <div class="container">
        <div class="card shadow" style="padding: 3rem">
            <div class="row" style="justify-content: space-between">
              <div class="col-6 row">
                <div class="col-md-6">
                    <!-- Display the cover image of the PDF -->
                    <img src="{{ Storage::url($pdf->cover_image) }}" class="w-100 book-1">
                </div>
                <div class="col-md-6 mt-3">
                    <!-- Info -->
                    <div class="d-flex gap-3 align-items-end">
                        <h3 id="title">{{ $pdf->title }}</h3>
                        <p id="date" class="d-inline" style="margin-bottom: 0.5rem !important;">{{ $pdf->created_at->format('d F Y') }}</p>
                    </div>
                    <!-- Adjust 'author' if you have an author field in the future -->
                    {{-- <p id="author" class="d-inline">Bilkis Ismail</p> --}}
                    <!-- Adjust 'date' if you have a created_at or similar date field -->
                    <!-- Placeholder for file size, adjust as needed -->
                    @php
                    function formatBytes($bytes, $precision = 2) {
                        $units = array('B', 'KB', 'MB', 'GB', 'TB');
                        $bytes = max($bytes, 0);
                        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
                        $pow = min($pow, count($units) - 1);
                        $bytes /= (1 << (10 * $pow));
                        return round($bytes, $precision) . ' ' . $units[$pow];
                    }
                    @endphp

                    <p id="size">
                        <i class="fas fa-file"></i> File Size <b>{{ formatBytes($pdf->size) }}</b>
                    </p>


                    <!-- Button -->
                    <div class="button">
                        <a id="read" class="btn btn-primary mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
                        <a href="{{ Storage::url($pdf->file_path) }}" class="btn btn-primary mt-2 text-white" download>Unduh PDF <i class="fas fa-download fa-lg"></i></a>
                    </div>
                </div>
              </div>
              <div class="col-5">
                <div class="row">
                  <div class="col-3">
                    <h5>Nama</h5>
                    <h5>Prodi</h5>
                    {{-- <h5>Univ.</h5> --}}
                  </div>
                  <div class="col-8">
                    <h5>: Alfia Almanda</h5>
                    <h5>: D4 Perpustakaan Digital</h5>
                    <h5>&nbsp; Universitas Negeri Malang</h5>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </body>

</html>
