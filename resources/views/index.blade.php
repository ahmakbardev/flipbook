<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
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
<!-- Costume CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/flipbook.style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">
<!-- Bootstrap Css -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="{{ asset('js/flipbook.min.js')}}"></script>

<script type="text/javascript">

    // $(document).ready(function () {
    //     $(".book-1").flipBook({
    //         // Layout Setting
    //         pdfUrl:'pdf/pdf.pdf',
    //         lightBox:true,
    //         layout:3,
    //         currentPage:{vAlign:"bottom", hAlign:"left"},
    //         // BTN SETTING
    //         btnShare : {enabled:false},
    //         btnPrint : {
    //           hideOnMobile:true
    //         },
    //         btnDownloadPages : {
    //           enabled: true,
    //           title: "Download pages",
    //           icon: "fa-download",
    //           icon2: "file_download",
    //           url: "images/pdf.rar",
    //           name: "allPages.zip",
    //           hideOnMobile:false
    //         },
    //         btnColor:'rgb(255,120,60)',
    //         sideBtnColor:'rgb(255,120,60)',
    //         sideBtnSize:60,
    //         sideBtnBackground:"rgba(0,0,0,.7)",
    //         sideBtnRadius:60,
    //         btnSound:{vAlign:"top", hAlign:"left"},
    //         btnAutoplay:{vAlign:"top", hAlign:"left"},
    //         // SHARING
    //         btnShare : {
    //           enabled: true,
    //           title: "Share",
    //           icon: "fa-share-alt"
    //         },
    //         facebook : {
    //           enabled: true,
    //           url: "ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
    //         },
    //         google_plus : {
    //           enabled: false
    //         },
    //         email : {
    //         enabled: true,
    //         url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf",
    //         title: "PDF KPK",
    //         description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
    //         },
    //         twitter : {
    //         enabled: true,
    //         url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
    //         },
    //         pinterest : {
    //         enabled: true,
    //         url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
    //         }
    //     });
    // })
</script>

<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    body {
      background-color: #f6f6f6;
    }

    * a:hover{
        text-decoration: none;
    }
    .bookshelf .thumb{
        display: inline-block;
        cursor: pointer;
        margin: 0px 0.5%;
        width: 15% !important;
        box-shadow:0px 1px 3px rgba(0,0,0,.3);
        max-width:120px;
    }
    .bookshelf .thumb img{
        width:100%;
        display:block;
        vertical-align:top;
    }
    .bookshelf .shelf-img{
        z-index:0;
        height: auto;
        max-width: 100%;
        vertical-align: top;
        margin-top:-12px;
    }
    .bookshelf .covers{
        width:100%;
        height:auto;
        z-index: 99;
        position: relative;
        text-align:center;
    }
    .bookshelf{
        text-align: center;
        padding:0px;
    }
    /* Pagination */
    .pagination>li>a,
    .pagination>li>span {
      color: #c0392b;
    }
    .pagination>li>a:hover,
    .pagination>li>span:hover {
      color: #c0392b !important;
    }
    .pagination>li.active>a {
      background-color: #c0392b !important;
      border: 0;
      color: #fff;
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
    background-color: rgba(74, 152, 241, 0.707);
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
<link rel="shortcut icon" href="{{ asset('logo.png') }}">
<title>Flipbook</title>

</head>
	<body>

    <!-- Navbar -->
    <header>
        <a href="#" style="color: black; font-weight: bold;"
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

        <nav class="navbar">
          {{-- <a href="{{ route('pdfs.index') }}" class="nav-item" style="--i: 3">Add PDF</a> --}}
        </nav>
      </header>
      <!-- End Of Navbar -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <section class="new-releases d-flex flex-column justify-content-center">
        <div class="center-text text-center">
          <h1>Keluaran Flipbook Baru</h1>
          <p>
            Ini adalah flipbook keluaran baru, silahkan klik gambar untuk melihat flipbooknya!
          </p>
        </div>
        <div class="album-slider card-carousel">
            @foreach($pdfs as $pdf)
            <div class="album-card my-card">
                <div class="album-img">
                        <a href="{{ route('details', $pdf) }}">
                        <img src="{{ Storage::url($pdf->cover_image) }}" alt="PDF Cover Image">
                    </a>
                    </div>
                    <div class="album-descritption">
                        {{-- <h2>{{ $pdf->title }}</h2> --}}
                        {{-- <h3>{{ $pdf->artist }}</h3> --}}
                        <h5>
                            {{ $pdf->title }}
                        </h5>
                    </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="slider-arrows">
          <p class="left-arrow">left</p>
          <p class="right-arrow">right</p>
        </div> --}}
      </section>





    <!-- PDF HERE -->
    <div class="bookshelf" style="margin-block: 100px">
        <div class="covers">
            @foreach($pdfs as $pdf)
                @if($loop->iteration % 3 == 1 && !$loop->first)
                    </div> <!-- Close covers -->
                    <img class="shelf-img" src="images/shelf_metal.png">
                </div> <!-- Close bookshelf -->
                <div class="bookshelf">
                    <div class="covers">
                @endif
                <div class="thumb book-{{ $loop->iteration }}">
                    <a href="{{ route('details', $pdf) }}">
                        <img src="{{ Storage::url($pdf->cover_image) }}">
                    </a>
                </div>
                @if($loop->last)
                    </div> <!-- Close covers -->
                    <img class="shelf-img" src="images/shelf_metal.png">
                </div> <!-- Close bookshelf -->
                @endif
            @endforeach
        </div>
    </div>
    <!-- End Of PDF -->

    <!-- Pagination -->
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item @if($currentPage == 1) disabled @endif">
                <a class="page-link" href="{{ route('home.index', ['page' => $currentPage - 1]) }}" tabindex="-1" aria-disabled="true">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            @for($i = 1; $i <= ceil($totalPdfs / $perPage); $i++)
                <li class="page-item @if($i == $currentPage) active @endif">
                    <a class="page-link" href="{{ route('home.index', ['page' => $i]) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item @if($currentPage == ceil($totalPdfs / $perPage)) disabled @endif">
                <a class="page-link" href="{{ route('home.index', ['page' => $currentPage + 1]) }}">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- End Of Pagination -->

    <!-- End Of Footer -->

    <!-- Bootstrap Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.3/swiper-bundle.min.js" integrity="sha512-ILrDRgEiIojcsKyBy12ZU7MtOf78F2fj3vve/AN5i94iXLQ8PZN7IJYPphmAGdwZmTv4N+OzY3trvqGIEY87VA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $num = $('.my-card').length;
$even = $num / 2;
$odd = ($num + 1) / 2;

if ($num % 2 == 0) {
  $('.my-card:nth-child(' + $even + ')').addClass('active');
  $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $even + ')').next().addClass('next');
} else {
  $('.my-card:nth-child(' + $odd + ')').addClass('active');
  $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
  $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
}

$('.my-card').click(function() {
  $slide = $('.active').width();
  console.log($('.active').position().left);

  if ($(this).hasClass('next')) {
    $('.card-carousel').stop(false, true).animate({left: '-=' + $slide});
  } else if ($(this).hasClass('prev')) {
    $('.card-carousel').stop(false, true).animate({left: '+=' + $slide});
  }

  $(this).removeClass('prev next');
  $(this).siblings().removeClass('prev active next');

  $(this).addClass('active');
  $(this).prev().addClass('prev');
  $(this).next().addClass('next');
});


// Keyboard nav
$('html body').keydown(function(e) {
  if (e.keyCode == 37) { // left
    $('.active').prev().trigger('click');
  }
  else if (e.keyCode == 39) { // right
    $('.active').next().trigger('click');
  }
});

$('.left-arrow').click(function() {
  $('.active').prev().trigger('click');
});

$('.right-arrow').click(function() {
  $('.active').next().trigger('click');
});
    </script>

	</body>
</html>
