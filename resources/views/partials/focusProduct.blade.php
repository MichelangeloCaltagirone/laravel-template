{{-- blade per la sezione focusProduct --}}

<section class="focusProduct">
    <div>
        {{-- intestazione sezione --}}
        <h2><strong>inserire titolo prodotto/servizio</strong></h2>

        <div class="row row-cols-2">
            <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium debitis ullam nam maiores amet. Quae ab non, consequuntur fugit unde reprehenderit ipsa voluptas magnam similique ullam soluta corrupti.</div>
            <div class="col">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quibusdam expedita, ea eligendi reiciendis explicabo, suscipit voluptates voluptatem possimus est cupiditate rerum sequi nostrum dolorem.</div>
        </div>
    </div>
</section>

<style>
    /* ho dovuto proteggere tutto con il selettore focusProduct per non coprire le regole generali poste sopra.
    molto ridondante, dovevo usare focusProduct {e scrivere tutte le regole qua dentro, così da applicarle solo
    ai figli di questo selettore} */
    .focusProduct {
        padding: 24px 100px;
        background-color: #fe5000;
        font-family: Karla;
        color: #FFFFFF;
        width: 100%;
        h2 {
            text-align: center;
        }
    }

    .focusProduct h2 {
        font-size: 22px;
    }

    .focusProduct div.col {
        font-size: 14px;
    }

   /* MEDIA QUERY per layout verticale sotto i 391px */
    @media screen and (max-width: 390px) {
        .focusProduct {
            padding: 24px 20px;
        }

        .focusProduct .row {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .focusProduct .col {
            font-size: 14px;
            margin: 0;
            padding: 10px 0;
            background-color: #FE5000;
            color: white;
        }

        .focusProduct h2 {
            font-size: 18px;
        }
    }
</style>
