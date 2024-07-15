document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("rdv-form");

    form.addEventListener("submit", function(event) {
        // Validation simple
        let valid = true;
        const nom = document.getElementById("nom");
        const email = document.getElementById("email");
        const telephone = document.getElementById("telephone");
        const dateRdv = document.getElementById("date-rdv");

        // Vérifier les champs obligatoires
        if (!nom.value.trim()) {
            valid = false;
            alert("Veuillez entrer votre nom.");
        }

        if (!email.value.trim() || !validateEmail(email.value)) {
            valid = false;
            alert("Veuillez entrer une adresse email valide.");
        }

        if (!telephone.value.trim()) {
            valid = false;
            alert("Veuillez entrer votre numéro de téléphone.");
        }

        if (!dateRdv.value.trim()) {
            valid = false;
            alert("Veuillez sélectionner une date pour le rendez-vous.");
        }

        if (!valid) {
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return re.test(String(email).toLowerCase());
    }
});
