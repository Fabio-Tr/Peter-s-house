<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-evenly d-flex">
            <h1 class="col-12 text-center font-old my-5 pt-3">Gli Appartamenti</h1>

            <div
                class="col-12 col-md-6 justify-content-center d-flex mx-0 my-2 bg-white card-contorn-appartments p-3 card-invsible">
                <div class="card-border">
                    <div class="card shadow-lg p-3">
                        <div class="card-body">


                            <img src="/img/letojanni/01.jpg" alt="" class="img-fluid">

                        </div>
                        <a href="#letojanni" class="appartment-link">
                            <h3 class="card-footer font-old text-center" id="letojanni-arrow">
                                Letojanni <i class="fa-solid fa-circle-arrow-down"></i>
                            </h3>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="col-12 col-md-6 justify-content-center d-flex mx-0 my-2 bg-white card-contorn-appartments p-3 card-invsible">
                <div class="card-border">
                    <div class="card shadow-lg p-3">
                        <div class="card-body">


                            <img src="/img/calatabiano/01.jpg" alt="" class="img-fluid">

                        </div>
                        <a href="#calatabiano" class="appartment-link">
                            <h3 class="card-footer font-old text-center" id="calatabiano-arrow">
                                Calatabiano <i class="fa-solid fa-circle-arrow-down"></i>
                            </h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 bg-white p-5 m-5" id="letojanni" style="display: none">
                <h4 class="font-old">Nel cuore di Letojanni</h5>
                    <p>a 30 metri dal mare si trova Peter’s House a soli 5 minuti in auto da Taormina e a 8 km
                        dall’Isola
                        Bella. ♥ La casa è dotata di 4 posti letto e offre una vista panoramica con balcone
                        sull’azzurro
                        mare dell’isola.
                        Composta da una grande camera da letto, una zona pranzo con divano letto, bagno e cucina
                        completa di
                        frigo, forno, lavatrice e ferro da stiro. La struttura offre anche connessione Wi-Fi gratuita,
                        Tv a
                        schermo piatto e aria condizionata in ogni camera, biancheria da letto, kit cortesia, phon. La
                        casa
                        si trova di fronte al mare al centro del paese, dove si trovano market, pescheria, lidi
                        balneari,
                        farmacia, giochi per bambini e bar!</p>

                    <div>
                        <h5>
                            DETTAGLIO SERVIZI
                        </h5>
                        <p>
                            Balcone con vista - Tv a schermo piatto - Aria condizionata - Bagno privato - Wifi -
                            Ferro e asse da stiro - Lavatrice - Set asciugamano - Biancheria da casa - Bincheria da
                            letto - Divano Letto - Prodotti per pulizie - Asciuga capelli
                        </p>
                    </div>

                    <div class="swiffy-slider slider-nav-autoplay slider-item-reveal slider-item-ratio slider-item-ratio-2x1 py-3 carousel-apartments"
                        id="slider1" data-slider-nav-autoplay-interval="3500">
                        <ul class="slider-container">
                            <li><img src="/img/letojanni/01.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/02.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/03.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/04.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/05.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/06.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/07.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/08.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/09.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/10.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/11.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                            <li><img src="/img/letojanni/12.jpg" loading="lazy" alt="Una foto della casa a Letojanni">
                            </li>
                        </ul>

                        <button type="button" class="slider-nav" aria-label="Go left"></button>
                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

                        <div class="slider-indicators slider-indicators-square d-none d-md-flex">
                            <button class="active" aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                        </div>

                        {{-- <div
                            class="slider-indicators slider-indicators-sm slider-indicators-dark slider-indicators-round d-md-none slider-indicators-highlight">
                            <button class="active" aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                        </div> --}}
                    </div>


            </div>

            <div class="col-12 bg-white p-5 m-5" id="calatabiano" style="display: none">
                <h4 class="font-old">Nel cuore di Calatabiano</h5>
                    <p>la città del Castello, si trova Peter’s House 2 a soli pochi minuti in auto dal limpido mare
                        azzurro del litorale di San Marco e a “due” passi dal Vulcano più alto d’Europa: l’Etna.♥
                        La casa, elegantemente arredata in stile moderno, è dotata di 8 posti letto e offre una vista
                        panoramica mozzafiato, dal balcone è possibile ammirare Taormina o la stupenda Etna e le sue
                        molteplici eruzioni, magari comodamente seduti sorseggiando un cocktail.
                        E’ Composta da un open space molto grande, con cucina completa di frigo, forno e lavastoviglie e
                        zona pranzo.


                        Una zona relax con divano-letto e tv a schermo piatto, 3 camere da letto eleganti e spaziose
                        ispirate alle stagioni, primavera, estate, ed autunno, e per finire 2 bagni spaziosi dotati di
                        wc, bidet, lavabo e 2 docce molto ampie.
                        La struttura offre anche connessione Wi-Fi gratuita, aria condizionata in ogni camera,
                        biancheria da letto, kit cortesia, phon, lavatrice e ferro da stiro.
                        La casa dista soli 600metri dal centro del paese, dove si trovano market, farmacie, giochi per
                        bambini,bar e pizzerie. Inoltre la posizione è davvero comoda perché in pochi minuti è possibile
                        raggiungere Giardini-Naxos, Taormina, le Gole dell’Alcantara, la riserva naturale di Fiumefreddo
                        di Sicilia.</p>

                    <div>
                        <h5>
                            DETTAGLIO SERVIZI
                        </h5>
                        <p>
                            Balcone con vista - Tv a schermo piatto - Aria condizionata - Bagno privato - Wifi -
                            Ferro e asse da stiro - Lavatrice - Lavastoviglie - Set asciugamano - Biancheria da casa -
                            Bincheria da
                            letto - Divano Letto - Prodotti per pulizie - Asciuga capelli
                        </p>
                    </div>

                    <div class="swiffy-slider slider-nav-autoplay slider-item-reveal slider-item-ratio slider-item-ratio-2x1 py-3 carousel-apartments"
                        id="slider1" data-slider-nav-autoplay-interval="3500">
                        <ul class="slider-container">
                            <li><img src="/img/letojanni/01.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/02.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/03.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/04.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/05.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/06.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/07.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/08.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/09.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/10.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/11.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                            <li><img src="/img/letojanni/12.jpg" loading="lazy" alt="Una foto della casa a Calatabiano">
                            </li>
                        </ul>

                        <button type="button" class="slider-nav" aria-label="Go left"></button>
                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

                        <div class="slider-indicators slider-indicators-square d-none d-md-flex">
                            <button class="active" aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                        </div>

                        {{-- <div
                            class="slider-indicators slider-indicators-sm slider-indicators-dark slider-indicators-round d-md-none slider-indicators-highlight">
                            <button class="active" aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                            <button aria-label="Go to slide"></button>
                        </div> --}}
                    </div>


            </div>









        </div>
    </div>





























</x-layout>
