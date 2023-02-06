<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <title>Demande de contact</title>
</head>
<body>
    <section>
        <header>
            <h1>Demande de contact</h1>
            <p>Veuillez renseigner les champs requis</p>
        </header>
        <form class="form-div" action="{{ route('contact') }}" method="POST">
            @csrf
            <div class="input-container">
                <div>
                    <input type="text" name="name" id="user-name" required>
                    <label for="user-name">Nom complet</label>
                </div>

                <div>
                    <input type="email" name="email" id="user-email" required>
                    <label for="user-email">Adresse email</label>
                </div>

                <div>
                    <textarea name="message" id="user-message" required></textarea>
                    <label for="user-message">Message</label>
                </div>
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </section>
</body>
</html>
