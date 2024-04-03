<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h5 class="title-font">
                    Grazie per esserti iscritto al nostro sito!
                </h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p class="parag-font">
                    Prima di cominciare, conferma la tua email!
                </p>
                @if (@session('status') == 'verification-link-sent')
                    <div class="alert alert-success my-4">
                        Ti abbiamo inviato una nuova mail di registrazione!
                    </div>
                @endif

                {{-- form per mandare una nuova email di verifica --}}
                <p class="my-5">Non hai ricevuto l'email? </p>
                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    <button class="button-custom" type="submit">
                        Nuova email
                    </button>
                </form>
                <p class="parag-font my-5">Stai riscontrando dei problemi?</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="button-custom" type="submit">
                        logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
