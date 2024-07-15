<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre Rendez-vous - Clinique Dams</title>
    <link rel="stylesheet" href="{{ asset('../css/formule.css') }}">
</head>
<body>
    <main class="main">
        <div class="container">
            <div class="formulaire-rdv">
                <h1>Prendre Rendez-vous</h1>
                <form id="rdv-form" action="/submit-rdv" method="POST">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone :</label>
                        <input type="tel" id="telephone" name="telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="date-rdv">Date de Rendez-vous :</label>
                        <input type="date" id="date-rdv" name="date-rdv" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message (optionnel) :</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn">Envoyer</button>
                </form>
            </div>
        </div>
    </main>
    <script src="formule.js"></script>
</body>
</html>
