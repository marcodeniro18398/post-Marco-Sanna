<x-layout>
    <div class="container2 " id="container2">

        {{-- form per il login --}}
        <div class="form-container sign-in">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h3 class="title-font">Accedi!</h3>
                <label for="email" class="form-controll parag-font">Email</label>
                <input type="email" class="parag-font" name="email" id="email"
                    placeholder="Inserisci la tua email!">

                <label class="parag-font" for="password">Password</label>
                <input type="password" name="password" class="parag-font" id="password"
                    placeholder="Inserisci la tua password!">

                <button type="submit" class="title-font">Submit</button>

                <p><a class="text-decoration-none parag-font" href="{{ 'forgot-password' }}">Hai dimenticato la tua
                        password?</a>
                </p>
            </form>
        </div>

        {{-- form per la registrazione --}}
        <div class="form-container sign-up">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h3 class="title-font">Registrati!</h3>
                <label for="name" class="form-controll parag-font">Name</label>
                <input type="text" name="name" class="" id="" placeholder="Inserisci il tuo nome!">

                <label for="email" class="form-controll parag-font">Email!</label>
                <input type="email" name="email" class="" id="email" placeholder="Inserisci la tua mail!">

                <label for="password" class="form-controll parag-font">Password</label>
                <input type="password" name="password" class="" id="password"
                    placeholder="Inserisci una password!">

                <label for="Password" class="form-controll parag-font">Conferma la tua Password</label>
                <input type="password" name="password_confirmation" class="" id="password_confirmation"
                    placeholder="Reinserisci la tua password!">

                <button type="submit" class="title-font">Submit</button>
            </form>
        </div>


        {{-- toggle per cambiare da registrazione a login --}}
        <div class="toggle-container">
            <div class="toggle">
                {{-- toggle di sinistra --}}
                <div class="toggle-panel toggle-left ">
                    <h2 class="title-font">Bentornato!</h2>
                    <p class="parag-font">accedi per utilizzare il sito!</p>
                    <button class="hidden title-font" id="login">Accedi!</button>
                </div>
                {{-- toggle di destra --}}
                <div class="toggle-panel toggle-right">
                    <h2 class="title-font">Benvenuto!</h2>
                    <p class="parag-font">Registrati per utilizzare il sito!</p>
                    <button class="hidden title-font " id="register">Registrati!</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
