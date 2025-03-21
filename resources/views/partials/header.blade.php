{{-- blade per Header pagina--}}

<header>
    <div class="d-flex">
        <div class="row">
            <div class="col col-8 py-3 px-5">

                {{-- immagine Logo --}}
                <img class="logo" src="{{ asset('images/Raggruppa165.svg') }}" alt="logo">

                {{-- intestazione header --}}
                <h1><strong>inserire titolo<br>prodotto/servizio</strong></h1>
                <span class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cumque repellendus perspiciatis veniam, non ut quos recusandae placeat reprehenderit delectus. Nemo atque!</span>

                {{-- link di rimando --}}
                <div class="d-flex align-content-center">
                    <a href="#"><i class="fa-regular fa-circle-right"></i><strong>inserire cta</strong></a>
                </div>
            </div>

            {{-- inclusione del form all'interno dell'header --}}
            @include("partials.form")
        </div>
    </div>
</header>

<style>
header {
    height: 864px;
    width: 100%;
    font-family: Karla;
    display: flex;
    align-items: center;
}
.row {
    display: flex;
    flex-wrap: nowrap;
    width: 100%;
    margin: 0;
}
.d-flex {
    height: 100%;
    width: 100%;
    }

/* il selettore sotto fa rifermiento al div che non contiente il form, ovvero il primo seguendo l'ordine  */
header .col:first-child {
    background-color: #F1F1F1;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 40px;
    flex-basis: 60%;
}
.logo {
    max-width: 343px;
    max-height: 77.5px;
    margin-left: 102px;
    margin-top: 66.15px;
}
h1 {
    font-size: 40px;
    line-height: 46px;
    margin-top: 180px;
    margin-left: 100px;
}
header span {
    display: block;
    height: 80px;
    margin-top: 14px;
    margin-left: 100px;
}
a {
    display: block;
    text-decoration: none;
    color: #FE5000;
    font-size: 24px;
    width: 154px;
    margin-left: 100px;
    margin-top: 30px;
}
i.fa-regular {
    color: #FE5000;
    margin-right: 7.5px;
    font-size: 24px;
}

/* MEDIA QUERY per layout verticale sotto i 391px */
@media screen and (max-width: 390px) {
    header {
        height: 100%;
        flex-direction: column;
        text-align: start;
        span {
            margin-bottom: 2rem;
            margin-left: 0;
        }
    }
    .row {
        flex-direction: column;
        align-items: center;
    }
/* il selettore sotto fa rifermiento al div che non contiente il form, ovvero il primo seguendo l'ordine  */
    header .col:first-child {
        width: 100%;
        height: auto;
        padding: 20px;
        flex: 1;

        .logo {
            margin: 0;
            display: block;
            width: 100%;
        }
        h1, span, a {
            margin-left: 0;
            width: 90%;
        }
        h1 {
            font-size: 28px;
            line-height: 34px;
            margin-top: 20px;
        }
    }
}
</style>
