<x-layout>
    <x-slot name='title'>
        Peter's House
    </x-slot>

    <div class="pt-5">

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-dark">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>




    

        <div class="container-fluid mx-0 px-0 mb-5">


            <div class="swiffy-slider slider-nav-autoplay slider-nav-round slider-nav-animation slider-nav-animation-fadein slider-item-first-visible carousel-head"
                data-slider-nav-autoplay-interval="5500">
                <ul class="slider-container">
                    <li class="slide-visible">
                        <div class="card rounded-0 h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-6 col-xl-5 d-flex align-items-center p-2 p-md-3 p-xl-5">
                                    <div class="card-body p-1 p-md-3 p-xl-5">
                                        <p class="lead font-old">Benvenuti a</p>
                                        <h1 class="card-title orange-text font-old">Peter's House</h1>
                                        <p class="card-text mt-3">I nostri appartamenti con vista Etna e con vista mare
                                            nella baia di Taormina sono il connubio perfetto per le vostre vacanze tra i
                                            profumi e sapori della meravigliosa Sicilia!</p>
                                        <p>Scopritela insieme a noi!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-7">
                                    <img src="/img/taormina.jpg" class="card-img d-none d-md-block" loading="lazy"
                                        style="height: 100%; object-fit: cover;" alt="...">
                                    <img src="/img/taormina.jpg"" class="   card-img d-block d-md-none" loading="lazy"
                                        style="width: 100%; object-fit: cover;" alt="...">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card rounded-0 h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-6 col-xl-7">
                                    <img src="/img/taormina1.jpg"" class="   card-img d-none d-md-block" loading="lazy"
                                        style="height: 100%; object-fit: cover" alt="...">
                                    <img src="/img/taormina1.jpg"" class="   card-img d-block d-md-none" loading="lazy"
                                        style="width: 100%; object-fit: cover" alt="...">
                                </div>
                                <div class="col-md-6 col-xl-5 d-flex align-items-center p-2 p-md-3 p-xl-5">
                                    <div class="card-body p-1 p-md-3 p-xl-5">
                                        <p class="lead font-old"></p>
                                        <h2 class="card-title orange-text font-old">Chi siamo
                                        </h2>
                                        <p class="card-text mt-3">Siamo una famiglia che nel 2018, un po’ per caso, ha
                                            deciso di ristrutturare la casetta al mare. La nostra idea di “casa vacanze”
                                            nasce dalla voglia di far trascorrere un soggiorno in tranquillità con tutto
                                            il necessario che soltanto in una casa si può trovare.
                                            <br><br>
                                            Ci teniamo a raccontarvi un po’ di più sulla nostra amata Sicilia, a
                                            fornirvi tutte quelle dritte che in una vacanza sono fondamentali per
                                            conoscere meglio ed esplorare il luogo.
                                            <br><br>
                                            Papà Pietro, mamma Antonella, Clarissa e Gloria vi aspettano.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card rounded-0 h-100 text-white">
                            <img src="/img/taormina2.jpg"" class="   card-img h-100"
                                style="max-height: 100%; max-width: 100%; object-fit: cover" alt="...">
                            <div
                                class="card-img-overlay d-flex align-items-start align-items-md-center justify-content-center flex-column">
                                <h2 class="card-title h1 d-block d-md-inline-block font-old">The Aston Martin DB5</h2>
                                <p class="card-text lead col-md-8 col-lg-6">The Aston Martin DB5 is a British luxury
                                    grand tourer (GT) that was made by Aston Martin and designed by the Italian
                                    coachbuilder Carrozzeria Touring Superleggera. </p>
                            </div>
                        </div>
                    </li>
                </ul>

                <button type="button" class="slider-nav" aria-label="Go left"></button>
                <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

                <div class="slider-indicators">
                    <button class="active" aria-label="Go to slide"></button>
                    <button aria-label="Go to slide"></button>
                    <button aria-label="Go to slide"></button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <hr class="col-6">
            </div>
        </div>


        <div class="container-fluid py-5 my-5 cards-container">
            <div class="row justify-content-evenly d-flex">

                <div class="col-12 col-md-4 justify-content-center d-flex m-0 bg-white card-contorn p-3 card1">
                    <div class="card-border">
                        <a href="{{route('appartments')}}">
                            <div class="card shadow-lg p-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title text-end orange-text font-old"><span class="fst-italic">
                                            Comfort</span> Rooms</h5>
                                    <hr class="hr1">
                                    <p class="card-text text-dark">Ampie e luminose le nostre camere sono adatte sia per
                                        famiglie
                                        che per coppie.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-4 justify-content-center d-flex m-0 bg-white card-contorn p-3 card2">
                    <div class="card-border">
                        <a href="{{route('contact')}}">
                            <div class="card shadow-lg p-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title text-end orange-text font-old"><span
                                            class="fst-italic">Friendly</span> Team</h5>
                                    <hr class="hr1">
                                    <p class="card-text text-dark">Consigliamo ai nostri ospiti come trascorrere al
                                        meglio
                                        il
                                        proprio soggiorno.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-4 justify-content-center d-flex m-0 bg-white card-contorn p-3 card3">
                    <div class="card-border">
                        <a href="{{route('merchandising')}}">
                            <div class="card shadow-lg p-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title text-end orange-text font-old"><span
                                            class="fst-italic">Handmade</span> Creations</h5>
                                    <hr class="hr1">
                                    <p class="card-text text-dark">Ricamate a mano, le nostre creazioni, vi regaleranno
                                        un
                                        ricordo della Sicilia.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <hr class="col-6">
            </div>
        </div>

        <div class="container presentazione py-3 shadow-lg p-3 my-5">
            <div class="row align-items-center">
                <p class="col-12 col-md-3 font-primary presentazione-testo1 text-dark ps-0 pe-2 py-1 text-end">
                    <strong class="font-old greater"><span class="orange-text">U</span>n piccolo angolo di paradiso
                        dove i colori del cielo si fondono
                        con quelli
                        del mare</strong>, Letojanni, un
                    paesino a soli 5 minuti da Taormina che racchiude tutta la magia dei colori, delle tradizioni
                    culinarie e del divertimento tipico, tra la calorosità dei suoi abitanti e i paesaggi suggestivi che
                    vi conquisteranno.
                    <br><br>
                    Dal profumo del pane appena sfornato la mattina, alle granite con brioches calde che potete trovare
                    sotto casa, agli arancini tipici siciliani, noi dello staff di Peter’s House cerchiamo sempre di
                    consigliarvi come trascorrere al meglio il vostro soggiorno, da quelli più lunghi alla scoperta
                    della Sicilia a quelli più brevi dedicati al relax.
                </p>
                <img src="/img/7.jpg" alt="" class="col-12 col-md-6">
                <p class="col-12 col-md-3 font-primary presentazione-testo2 pe-0 ps-2 text-dark py-1">
                    <strong><span class="font-old greater">Peter’s House</span></strong> conta 2 appartamenti.
                    Il primo apre nel 2018 a Letojanni (Me) a soli 30 metri dall’azzurro mare dell’isola.
                    Curato nei minimi dettagli e fornito di tutto il necessario per trascorrere un soggiorno tranquillo
                    e con tutti i comfort.
                    Nel 2021 il secondo Peter’s House apre a Calatabiano (Ct) nella città del castello arabo-normanno.
                    Dall’ampio terrazzo si può sorseggiare un cocktail con vista Etna e Taormina.
                    <br><br>
                    <strong class="font-old greater">Il caloroso staff di Peter’s House, formato da papà Peter, mamma
                        Antonella, Gloria e Clarissa, è
                        pronto
                        ad accogliervi nelle vostre vacanze.</strong>
                    Il nostro punto di forza che ci contraddistingue da sempre è:
                    “Chi soggiorna da noi, arriva come ospite ma ci lascia come un amico”.

                </p>



            </div>

        </div>


        
    
</x-layout>
