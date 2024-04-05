<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tião Carreiro e Pardinho</title>
</head>
<body>
    <header>
            <div class="logo">b.</div>
            <ul class="menu">
                <li><a href="{{ route('albuns.index') }} ">
                    <button class="btn btn-dark my-4">Discografia</button>
                </a></li>
                <li><a href="{{ route('albuns.create') }}"><button class="btn btn-dark my-4">Criar</button>
                </a></li>
            </ul>
    </header>

    <div class="slider">
        <div class="list">
            <div class="item active">
                <img src="{{ asset('img/TCeP(4).webp') }}">
                <div class="content">
                    <p>RAIZ</p>
                    <h2>Caipira</h2>
                    <p>A música de raiz brasileira tem personagens ilustres.
                        Entre eles uma dupla do interior paulista que se conheceu em 1954 no Ciro Rapa-Rapa na cidade de Pirajuí.
                        São eles José Dias Nunes e Antônio Henrique de Lima, respectivamente Tião Carreiro e Pardinho.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(2).webp') }}">
                <div class="content">
                    <p>RAIZ</p>
                    <h2>Viola</h2>
                    <p>Um dos grandes méritos dessa dupla sertaneja foi criação de um subgênero da moda de viola, o pagode de viola,
                        uma combinação de ritmos do coco feito no violão e do calango de roda, na viola. Um gênero animado que
                        conferiu aos artistas uma importância muito grande no universo da música de raiz.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(5).webp') }}">
                <div class="content">
                    <p>RAIZ</p>
                    <h2>Sucesso</h2>
                    <p> O primeiro sucesso, “Pagode em Brasília” (Ted Vieira e Lourival dos Santos), a ainda “Rei do Gado”, “Terra roxa”,
                        “Rio Preto de Luto”, “Azulão do reino encantado”, “Cavaleiros de Bom Jesus”, “Boiadeiro punho de aço” e até
                        uma homenagem à seleção brasileira de futebol do bicampeonato de 1962.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(3).webp') }}">
                <div class="content">
                    <p>RAIZ</p>
                    <h2>Legado</h2>
                    <p>A carreira da dupla se estendeu por dois períodos: de 1954 a 1978 e de 1981 a 1993, ano em que faleceu Tião Carreiro.
                        Pardinho continua na ativa até seu falecimento em 2001. No programa, seu último sucesso, “Sua majestade o pagode”,
                        lançado em 1993, no derradeiro LP da dupla.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(1).webp') }}">
                <div class="content">
                    <p>RAIZ</p>
                    <h2>Discografia</h2>
                    <p>O objetivo desse projeto é adicionar, editar e excluir albuns do banco de dados.
                    </p>
                </div>
            </div>
        </div>

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>

        <div class="thumbnail">
            <div class="item active">
                <img src="{{ asset('img/TCeP(4).webp') }}">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(2).webp') }}">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(5).webp') }}">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(3).webp') }}">
                <div class="content">
                    Name Slider
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('img/TCeP(1).webp') }}">
                <div class="content">
                    Name Slider
                </div>
            </div>
        </div>
    </div>

    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slider .list .item');
        const thumbnails = document.querySelectorAll('.thumbnail .item');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');

        let currentSlide = 0;

        function activateSlide(slideIndex) {
            slides.forEach(slide => slide.classList.remove('active'));
            thumbnails.forEach(thumbnail => thumbnail.classList.remove('active'));

            slides[slideIndex].classList.add('active');
            thumbnails[slideIndex].classList.add('active');
        }

        prevBtn.addEventListener('click', function() {
            currentSlide--;
            if (currentSlide < 0) {
                currentSlide = slides.length - 1;
            }
            activateSlide(currentSlide);
        });

        nextBtn.addEventListener('click', function() {
            currentSlide++;
            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }
            activateSlide(currentSlide);
        });

        activateSlide(currentSlide);
    </script>

</body>
</html>

<style>
    body {
        margin: 0;
        background-color: #010101;
        color: #eee;
    }
    header {
        width: 1200px;
        max-width: 100%;
        margin: auto;
        display: grid;
        grid-template-columns: 50px 1fr 50px;
        grid-template-rows: 50px;
        justify-content: center;
        align-items: center;
        position: relative;
        z-index: 100;
        color: #000;
    }

    header .logo {
        font-weight: bold;
    }

    header .menu {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        justify-content: center;
        gap: 20px;
        font-weight: 500;
    }

    .slider {
        height: 100vh;
        margin-top: -50px;
        position: relative;
    }

    .slider .list .item {
        position: absolute;
        inset: 0 0 0 0;
        overflow: hidden;
        opacity: 0;
        transition: .5s;
    }

    .slider .list .item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .slider .list .item::after {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        bottom: 0;
        background-image: linear-gradient(
            to top, #000 40%, transparent
        );
    }

    .slider .list .item .content {
        position: absolute;
        left: 10%;
        top: 20%;
        width: 500px;
        max-width: 80%;
        z-index: 1;
    }

    .slider .list .item .content p:nth-child(1) {
        text-transform: uppercase;
        letter-spacing: 10px;
    }
    .slider .list .item .content h2 {
        font-size: 100px;
        margin: 0;
    }
    .slider .list .item.active {
        opacity: 1;
        z-index: 10;
    }
    @keyframes showContent {
        to {
            transform: translateY(0);
            filter: blur(0);
            opacity: 1;
        }
    }

    .slider .list .item.active p:nth-child(1),
    .slider .list .item.active h2,
    .slider .list .item.active p:nth-child(3) {
        transform: translateY(30px);
        filter: blur(20px);
        opacity: 0;
        animation: showContent .5s .7s ease-in-out 1 forwards;
    }

    .slider .list .item.active h2 {
        animation-delay: 1s;
    }

    .slider .list .item.active p:nth-child(3) {
        animation-delay: 1.3s;
    }

    .arrows {
        position: absolute;
        top: 30%;
        right: 50px;
        z-index: 100;
    }

    .arrows button {
        background-color: #eee5;
        border: none;
        font-family: monospace;
        width: 40px;
        height: 40px;
        border-radius: 5px;
        font-size: x-large;
        color: #eee;
        transition: .5s;
    }
    .arrows button:hover {
        background-color: #eee;
        color: black;
    }

    .thumbnail {
        position: absolute;
        bottom: 50px;
        z-index: 11;
        display: flex;
        gap: 10px;
        width: 100%;
        height: 250px;
        padding: 0 50px;
        box-sizing: border-box;
        overflow: auto;
        justify-content: center;
    }
    .thumbnail::-webkit-scrollbar {
        width: 0;
    }
    .thumbnail .item {
        width: 150px;
        height: 220px;
        filter: brightness(.5);
        transition: .5s;
        flex-shrink: 0;
    }
    .thumbnail .item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }
    .thumbnail .item.active {
        filter: brightness(1.5);
    }
    .thumbnail .item .content {
        position: absolute;
        inset: auto 10px 10px 10px;
    }
    @media screen and (max-width: 678px) {
        .thumbnail {
            justify-content: start;
        }
        .slider .list .item .content h2 {
            font-size: 60px;
        }
        .arrows {
            top: 10%;
        }
    }

</style>

