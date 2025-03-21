{{-- blade per footer --}}

<footer>
    <div class="d-flex justify-content-between">
        <div class="row">

            {{-- footer da 4 sezioni --}}
            {{-- logo --}}
            <div class="col">
                <img class="logoFooter" src="{{ asset('images/Raggruppa 278.svg') }}" alt="logo">
            </div>

            {{-- Contatti Sede --}}
            <div class="col sedeReggio">
                <span>Sede Reggio Emilia<br></span>
                <span>
                    Largo Giambellino 4/B<br>
                    42124 Reggio Emilia<br>
                    +39 0522 273320
                </span>
            </div>

            {{-- Contatti Sede --}}
            <div class="col sedeMilano">
                <span>Sede Milano<br></span>
                <span>
                    Via San Raffaelle 1<br>
                    20121 Milano<br>
                    +39 02 40703362
                </span>
            </div>

            {{-- Social e iscrizione newsletter --}}
            <div class="col">
                <div class="facebookLogo justify-content-center">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="linkedinLogo justify-content-center">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <div class="d-flex text-nowrap justify-content-start fakeLink">
                    <a href="#"><i class="fa-regular fa-circle-right"></i>iscriviti alla newsletter</a>
                </div>
            </div>

        </div>
    </div>
</footer>


<style>
    footer {
        background-color: #2D2926;
        padding: 25px 100px;
        color: #ffffff;

        img.logoFooter {
            margin: 0;
        }

        .row .col {

            span:last-child {
                color: #726F6D;
            }
            a {
                margin-top: 20px;
                margin-left: 0;
                text-decoration: none;
                color: #ffffff;
                i {
                    margin-right: 12px;
                    color: #fe5000;
                }
            }
            span {
                margin: 0;
                height: auto;
            }
        }

        .facebookLogo, .linkedinLogo {
            color: #fe5000;
            background-color: #ffffff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            margin-right: 10px;
        }
        .logo {
            width: 100%;
        }
    }

    @media screen and (max-width: 391px) {
        footer {
            padding: 25px 10px;

            .row .col:last-child {
                margin-top: 10px;
            }
        }
        .fakeLink > a {
            display: none;
        }
        .sedeReggio, .sedeMilano {
            margin-top: 15px;
        }
    }

</style>
