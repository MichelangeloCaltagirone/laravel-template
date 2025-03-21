{{-- blade per sezione distributors --}}

<section class="distributors">
    {{-- immagine --}}
    <img class="rettangoloImg" src=" {{ asset('images/Rettangolo 248@3x.png')  }}" alt="rettangolo">

    <div>
        {{-- intestazione sezione --}}
        <h2><strong>i nostri distributori</strong></h2>
        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt.</span>

        <div class="d-flex flex-wrap row-cols-2 mt-3 contactList">

            {{-- simil 'card', metodo debole col for perchè in produzione presumibilmente avranno tutti valori diversi
            per diversi campi --}}
            @for ($i = 0; $i < 6; $i++)
                <div class="col">
                    <i class="fa-solid fa-circle"></i>
                    <h4><strong>Reggio Emilia</strong></h4>
                    <span>Largo Giambellino 4/B - 42124 RE<br>
                    +39 0522 273320</span>
                </div>
            @endfor

        </div>
    </div>
{{--   soluzione per posizionare immagine quando si raggiunge il breakpoint della Media query  --}}
    <img class="rettangoloImgSmall" src=" {{ asset('images/Rettangolo 248@3x.png')  }}" alt="rettangolo">

</section>

<style>
    section.distributors {
        background: linear-gradient(90deg, #E5E1E6, #FFFFFF);
        padding: 40px 0 40px 150px;
        position: relative;

        h2 {
            text-align: start;
        }

        .rettangoloImg {
            height: 460px;
            width: auto;
            position: absolute;
            top: -67px;
            left: 620px;
        }
        .rettangoloImgSmall {
            display: none;
        }

        span {
            margin-left: 0;
        }

        .contactList {
            width: 60%;
            font-size: 14px;

            .col {
                position: relative;
                width: calc(50% - 64px);
                margin-left: 34px;
                font-size: 14px;
                h4 {
                    font-size: 14px;
                    margin: 0;
                }
            }

            i {
                font-size: 12px;
                color: #fe5000;
                position: absolute;
                left: -35px;
                top: 3px;
            }

            span {
                margin: 0;
            }
        }
    }

    /* Media Query per schermi sotto 391px */
    @media screen and (max-width: 391px) {
        /* ho dovuto anche qui proteggere tutto con il selettore section.distributors per non coprire le regole generali poste sopra.
        molto ridondante, dovevo usare section.distributors {e scrivere tutte le regole qua dentro, così da applicarle solo
        ai figli di questo selettore} */
        section.distributors {
            padding: 20px 15px;
            background: linear-gradient(to bottom, #E5E1E6, #FFFFFF);

        }
        section.distributors .rettangoloImg {
            display: none;
        }
        section.distributors .rettangoloImgSmall {
            display: block;
            width: 100%;
        }
        section.distributors .contactList {
            width: 100%;
            font-size: 16px;
            display: block;
        }
        section.distributors .contactList .col {
            width: 100%;
            margin-left: 0;
            margin-bottom: 15px;
            h4 {
                display: inline;
                padding-left: 12px;
            }
            span {
                display: block;
                padding-left: 30px;
                text-align: start;
                font-size: 16px;
            }
        }
        section.distributors .contactList i {
            font-size: 16px;
            position: relative;
            left: 0;
            top: 0;
        }
        section.distributors span {
            font-size: 18px;
            text-align: center;
            margin-bottom: 10px;
        }
        section.distributors h4 {
            font-size: 16px;
            margin: 5px 0;
        }
    }
</style>
