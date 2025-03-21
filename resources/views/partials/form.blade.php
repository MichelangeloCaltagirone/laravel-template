
{{-- blade per il form --}}
<section class="customForm col py-3 px-5">
    <section class="form-container py-3 px-3">

        {{-- Intestazione Form --}}
        <img class="formLogo" src="{{ asset('images/Raggruppa252.svg') }}" alt="logoForm">
        <h2>INSERIRE TITOLO FORM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        {{-- Form con i suoi campi --}}
        <form action="{{ route('saveForm') }}" method="POST">
            @csrf

            <div class="form-group name-surname">
                <div class="input-group">
                    <label for="nome"><strong>Nome</strong><span class="required">*</span></label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="input-group">
                    <label for="cognome"><strong>Cognome</strong><span class="required">*</span></label>
                    <input type="text" id="cognome" name="cognome" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email"><strong>Email</strong><span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="azienda"><strong>Azienda</strong><span class="required">*</span></label>
                <input type="text" id="azienda" name="azienda" required>
            </div>

            <div class="form-group">
                <label for="ruolo"><strong>Ruolo</strong></label>
                <input type="text" id="ruolo" name="ruolo">
            </div>

            <div class="form-group checkbox-group">
                <input type="checkbox" id="policy" name="policy" required>
                <label for="policy" class="policy-text">Lorem ipsum dolor sit amet.</label>
            </div>

            {{-- bottone di submit --}}
            <button type="submit" class="submit-button">CONTATTACI ORA</button>

        </form>
    </section>
</section>


<style>

.customForm {
    flex-basis: 40%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-container {
    text-align: left;
}

.formLogo {
    height: 70px;
    margin-bottom: 50px;
    margin-top: 45px;
}

h2 {
    font-size: 1.5em;
    font-weight: bold;
}

.form-group {
    margin-bottom: 15px;
}

.name-surname {
    display: flex;
    gap: 10px;
}

.input-group {
    flex: 1;
}

input {
    width: 100%;
    padding: 10px;
    border: none;
    background-color: #F1F1F1;
}
label {
    display: inline; /* Mantiene il testo della label e lo span sulla stessa riga */
}

.required {
    color: #fe5000;
    display: inline;
    margin: 0;
}

.checkbox-group {
    display: flex;
    align-items: baseline;
    gap: 10px;
}

.checkbox-group input {
    width: auto;
    margin: 0;
}

.policy-text {
    flex: 1;
    display: block;
}

.submit-button {
    background-color: #fe5000;
    color: white;
    padding: 15px;
    width: 100%;
    border: none;
    border-radius: 5px;
    font-size: 1.2em;
    cursor: pointer;
}

.submit-button:hover {
    background-color: darkorange;
}

/* MEDIA QUERY per layout verticale sotto i 391px */
@media screen and (max-width: 390px) {
    .customForm {
        width: 100%;
        flex: 1;
    }

    .name-surname {
        flex-direction: column;
    }
}
</style>
