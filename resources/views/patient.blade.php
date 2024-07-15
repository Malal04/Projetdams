<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Climique Dams</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jumbo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
   <div class="bb-body">
        <header class="header">
            <div class="container">
                <div class="header-texte">
                    <img src="image/Group 1.svg" alt="logo">
                    <div class="header-nav">
                        <ul class="ul-nav">
                            <li>
                                <a href="#">Accueil</a>
                            </li>
                            <li>
                                <a href="#">A propos</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                        @if (Route::has('login'))
                        <div class="login">
                        <ul class="login-nav">
                            @auth
                            <li>
                                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            </li>
                                @else
                                <li>
                                    <a href="{{ route('login') }}" class="">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="">Register</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="container">
                <div class="main-texte">
                   <div class="main-tt">
                        <h1 id="animated-text">
                            Clinique DAMS Votre Santé, notre priorité<br>
                            Bienvenue à la Clinique !
                        </h1>
                        <p>
                            La clinique Dams est une clinique de chirurgie esthétique 
                            privée spécialisée dans les problèmes de peau et de visage.
                            Nous proposons des services de chirurgie esthétique à des tarifs raisonnables.
                        </p>
                        <div class="boutton">
                            <ul class="bton">
                                <li>
                                    <a href="{{ route('render') }}">Prendre rendez-vous</a>
                                </li>
                                <li>
                                    <a href="#">Suivis</a>
                                </li>
                            </ul>
                        </div>
                   </div>

                   <div class="main-img">
                    <img src="image/laravel_0.png" alt="clinique" class="active">
                    <img src="image/laravel_1.png" alt="clinique">
                    <img src="image/laravel_2.png" alt="clinique">
                    <img src="image/laravel_2.png" alt="clinique">
                    </div>
                </div>

                <div class="testi">

                    <div class="testimonials">
                        <h2>Ce que disent nos patients</h2>
                        <div class="testimonial-container">
                            <div class="testimonial">
                                <p>"Excellent service et personnel très attentionné."</p>
                                <span>- Marie Louise Diatta</span>
                            </div>
                            <div class="testimonial">
                                <p>"Je suis très satisfait des résultats de ma chirurgie esthétique."</p>
                                <span>- Arame Diallo</span>
                            </div>
                            <div class="testimonial">
                                <p>"J'ai été très satisfait de mon rendez-vous avec la clinique Dams."</p>
                                <span>- Weuz Diallo</span>
                            </div>
                        </div>
                    </div>        

                </div>

            </div>
        </main>
   </div>
   <section>
        <div class="about-section">
            <div class="container">
                <h2>À Propos de Nous</h2>
                <div class="about-content">
                    <div class="about-text">
                        <h3>Notre Histoire</h3>
                        <p>
                            La Clinique Dams a été fondée avec la mission de fournir des soins de qualité supérieure en chirurgie esthétique. Depuis nos débuts, nous avons aidé de nombreux patients à se sentir plus confiants grâce à nos services spécialisés.
                        </p>
                        <h3>Notre Mission</h3>
                        <p>
                            Nous croyons que chaque patient mérite de se sentir bien dans sa peau. Notre objectif est de fournir des soins personnalisés, avec une attention particulière à la sécurité et au confort de nos patients.
                        </p>
                        <h3>Notre Équipe</h3>
                        <p>
                            Notre équipe est composée de professionnels de la santé hautement qualifiés et dévoués. Nous travaillons ensemble pour garantir les meilleurs résultats possibles pour chaque patient.
                        </p>
                    </div>
                    <div class="about-image">
                        <img src="image/about-us.png" alt="À propos de nous">
                    </div>
                </div>
                <div class="team-section">
                    <h3>Rencontrez Notre Équipe</h3>
                    <div class="team-container">
                        <div class="team-member">
                            <img src="image/sectet1.png" alt="Docteur 1">
                            <h4>Dr. Arame Diallo</h4>
                            <p>Chirurgien Esthétique Principal</p>
                        </div>
                        <div class="team-member">
                            <img src="image/sectet2.png" alt="Docteur 2">
                            <h4>Dr. Mamadou Ba</h4>
                            <p>Spécialiste en Dermatologie</p>
                        </div>
                        <div class="team-member">
                            <img src="image/sectet.png" alt="Docteur 3">
                            <h4>Dr. Pabi Diop</h4>
                            <p>Chirurgien Plastique</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-section">
            <div class="container">
                <h2>Nos Services</h2>
                <div class="services-container">
                    <div class="service">
                        <img src="image/service1.svg" alt="Service 1">
                        <h3>Chirurgie Esthétique</h3>
                        <p>Nous offrons une gamme complète de services de chirurgie esthétique pour améliorer votre apparence.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                    <div class="service">
                        <img src="image/service2.svg" alt="Service 2">
                        <h3>Traitements de la Peau</h3>
                        <p>Nos traitements de la peau aident à résoudre les problèmes dermatologiques pour une peau saine.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                    <div class="service">
                        <img src="image/service3.svg" alt="Service 3">
                        <h3>Soins du Visage</h3>
                        <p>Nous proposons des soins du visage personnalisés pour garder votre visage éclatant et jeune.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                    <div class="service">
                        <img src="image/service.svg" alt="Service 4">
                        <h3>Orthopédie</h3>
                        <p>Nous offrons une gamme d'orthopédie spécialisée pour réparer les problèmes de votre corps.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                    <div class="service">
                        <img src="image/service5.svg" alt="Service 5">
                        <h3>Dentistes</h3>
                        <p>Nous proposons des dentistes spécialisés pour vous soigner les dents et améliorer votre visage.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                    <div class="service">
                        <img src="image/service6.svg" alt="Service 6">
                        <h3>Cardiologie</h3>
                        <p>Nous proposons des services de cardiologie pour vous aider à réduire les risques de maladies cardiovasculaires.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                    <div class="service">
                        <img src="image/service7.svg" alt="Service 7">
                        <h3>Psychiatrie</h3>
                        <p>Nous proposons des services de psychiatrie pour vous aider à réduire les risques de dépression et de traumatismes.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                    <div class="service">
                        <img src="image/service8.svg" alt="Service 8">
                        <h3>Médecine Genomique</h3>
                        <p>Nous proposons des services de médecine genomique pour vous aider à développer des caractéristiques et des mutations.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section">
            <div class="container">
                <h2>Contactez-Nous</h2>
                <div class="contact-content">
                    <div class="contact-info">
                        <h3>Informations de Contact</h3>
                        <p>Adresse : Keur Massar, Apix, Dakar, Sénégal</p>
                        <p>Téléphone : +221 78 450 74 13</p>
                        <p>Email : contact@cliniquedams.sn</p>
                        
                        <h3>Heures d'Ouverture</h3>
                        <p>Lundi - Vendredi : 8h - 18h</p>
                        <p>Samedi : 9h - 13h</p>
                        <p>Dimanche : Fermé</p>
                    </div>
                    <div class="contact-form">
                        <h3>Envoyez-nous un Message</h3>
                        <form action="path_to_your_backend_script" method="post">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="submit-btn">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <footer class="footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>Contactez-Nous</h3>
                    <p>Adresse : Keur Massar, Apix, Dakar, Sénégal</p>
                    <p>Téléphone : +221 78 450 74 13</p>
                    <p>Email : contact@cliniquedams.sn</p>
                </div>
                <div class="footer-column">
                    <h3>Liens Utiles</h3>
                    <ul class="footer-nav">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Suivez-Nous</h3>
                    <ul class="social-nav">
                        <li><a href="#"><img src="image/Feceboot.svg" alt="Facebook">Facebook</a></li>
                        <li><a href="#"><img src="image/twing.svg" alt="Twitter">Twitter</a></li>
                        <li><a href="#"><img src="image/instaga.svg" alt="Instagram">Instagram</a></li>
                        <li><a href="#"><img src="image/linke.svg" alt="LinkedIn">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Malal Webdesign</p>
            </div>
        </div>
    </footer>

   <script src="js/ma.js"></script>
</body>
</html>