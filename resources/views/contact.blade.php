<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Demande de contact</title>
</head>
<body>
    <form action="/contact" method="POST">
        @csrf
        <label for="user-name">Votre nom complet</label>
        <input type="text" name="name" id="user-name">

        <label for="user-email">Votre adresse email</label>
        <input type="email" name="email" id="user-email">

        <label for="user-message">Votre message</label>
        <textarea name="message" id="user-message"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
