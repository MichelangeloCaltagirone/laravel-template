{{-- blade per la sezione remainder --}}

<section class="remainder">

    <div>
        {{-- intestazione sezione --}}
        <h2>blocco con rimando finale al form</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quod ipsum, quas repellat accusantium aspernatur modi vero obcaecati nemo et a.</p>
        {{-- link di rimando --}}
        <div class="d-flex justify-content-center fakeLink">
            <a href="#"><i class="fa-regular fa-circle-right"></i><strong>inserire cta</strong></a>
        </div>
    </div>

</section>


<style>
    .remainder {
        padding: 45px 100px;

        .fakeLink > a {
            text-decoration: none;
            color: #ffffff;
        }
    }

    .remainder div:first-child {
        background-color: #fe5000;
        padding: 20px 150px;
        color: #ffffff;
        text-align: center;

        a {
            margin-left: 0;
        }
        i.fa-regular {
            margin-right: 8px;
            color: #ffffff;
        }
    }

    /* Media Query per schermi sotto 391px */
    @media screen and (max-width: 391px) {
        .remainder {
            padding: 15px 10px;
        }
        .remainder div:first-child {
            padding: 10px 5px;
        }
    }
</style>


