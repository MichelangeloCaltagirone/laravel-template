{{-- blade per la sezione mainProduct --}}

<section class="text-center mainProduct">
    {{-- intestazione sezione --}}
    <h2>inserire vantaggi prodotto/servizio</h2>
    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores.</span>

    {{-- prima parte dove si mostrano 3 card --}}
    <div class="d-flex justify-content-between mt-4">
        @for ($i = 0; $i < 3; $i++)
            <div class="card" style="width: 18rem;">
                <div class="fakeImg text-center">inserire<br>immagine/icona</div>
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">plus/benefici</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        @endfor
    </div>

    {{-- seconda parte dove si mostrano 2 sezione affiancate, una con una 'immagine', l'altra testuale --}}
    <div class="d-flex justify-content-center row-cols-2 mt-5 gap-2">
        {{-- finta immagine da inserire --}}
        <div class="d-flex justify-content-center my-auto fakeImgBig">
            <div>inserire<br>foto</div>
        </div>
        {{-- parte testuale della sezione --}}
        <div class="col productDescription">
            <h2>inserire descrizione prodotto</h2>
            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi! Maxime odio reprehenderit at dignissimos neque sapiente repellat perspiciatis? Quae necessitatibus velit voluptatum ex harum ipsam perferendis laboriosam esse corrupti!</p>
            <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi! Maxime odio reprehenderit at dignissimos neque sapiente repellat perspiciatis? Quae necessitatibus velit voluptatum ex harum ipsam perferendis laboriosam esse corrupti!</p>
            <button class="btn">contattaci ora</button>
        </div>
    </div>
</section>

<style>
    /* ho dovuto proteggere tutto con il selettore section.mainProduct per non coprire le regole generali poste sopra.
    molto ridondante, dovevo usare section.mainProduct {e scrivere tutte le regole qua dentro, così da applicarle solo
    ai figli di questo selettore} */
    section.mainProduct {
        padding: 55px 120px;
        background-color: #FFFFFF;
    }

    section.mainProduct hr {
        width: 50px;
        border: solid 5px #FE5000;
        margin: 8px auto;
        opacity: 1;
    }

    section.mainProduct .fakeImg {
        background-color: #AFAFAF;
        height: 130px;
        color: white;
        padding: 30px 0;
    }

    section.mainProduct .card {
        border: none;
    }

    section.mainProduct .card p {
        font-size: 12px;
    }

    section.mainProduct .card h5 {
        margin-top: 12px;
        margin-bottom: 12px;
        font-weight: bold;
    }

    section.mainProduct .card-body {
        background-color: #FFFFFF;
    }

    section.mainProduct .fakeImgBig {
        width: 420px;
        height: 320px;
        background-color: #AFAFAF;
        box-shadow: -18px 18px #FE5000;
    }

    section.mainProduct .fakeImgBig div {
        margin: auto 0;
        font-size: 24px;
        color: white;
    }

    section.mainProduct .productDescription {
        margin-left: 50px;
        padding: 20px;
        text-align: start;
    }

    section.mainProduct .productDescription h2 {
        margin-bottom: 10px;
    }

    section.mainProduct .productDescription p {
        font-size: 13px;
    }

    section.mainProduct .btn {
        padding: 5px 10px;
        background-color: #FE5000;
        color: #FFFFFF;
        border-radius: 0%;
        border: none;

    }

    /* Media query per schermi sotto i 391px */
    @media screen and (max-width: 391px) {

        section.mainProduct {
            padding: 20px 10px;
        }


        section.mainProduct .d-flex {
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        section.mainProduct .card {
            width: 100%;
            margin-bottom: 20px;
        }

        section.mainProduct .fakeImgBig {
            width: 90%;
            height: 250px;
            margin: 0 auto 20px auto;
        }

        section.mainProduct .productDescription {
            margin: 14px 0;
            text-align: center;
            padding: 15px;
            width: 100%;
        }

        section.mainProduct .productDescription h2 {
            margin-bottom: 8px;
        }

        section.mainProduct .productDescription p {
            font-size: 12px;
            margin-bottom: 10px;
        }

        section.mainProduct .productDescription button {
            width: 100%;
            margin-top: 14px;
        }

        section.mainProduct .d-flex.justify-content-between {
            flex-direction: column;
            align-items: center;
        }
    }
</style>


