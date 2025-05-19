@extends('layouts.app')
@section('content')

<style>
  
    .card {
        border: 1px solid #dee2e6 !important; /* Ajoute une bordure grise légère comme sur l'image */
    }
    .card-title {
        margin-bottom: 1rem;
    }
    .card-text {
        color: #495057; /* Couleur de texte plus neutre */
    }

        body {
            font-family: 'Inter', sans-serif;
        }
        .service-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .service-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f0f0f0;
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            color: #333;
        }
        .service-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .service-description {
            font-size: 1rem;
            color: #555;
            line-height: 1.5;
            margin-bottom: 15px;
        }
        .btn-know-more {
            color: #ff6600;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .btn-know-more:hover {
            color: #cc5200;
        }
    </style>

<div class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </div>
            <div class="col-md-8">
                <h2>Bienvenue chez KIWAL SARL</h2>
                <p class="lead">« L'Afrique avance avec ses talents. Nous construisons les solutions pour l'accompagner. »</p>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-light {
        background-color: #f8f9fa !important; /* Couleur de fond gris très clair (par défaut de Bootstrap) */
    }
</style>
<main class="container py-5">
        <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <h2 class="fw-bold text-center">Notre vision</h2>
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    
                    <p class="card-text">Nous croyons en une transformation digitale inclusive, ancrée dans les réalités africaines. Chez KIWAL, nous plaçons l'innovation au service du développement, en mettant la technologie à la portée des décideurs locaux pour une croissance durable, sécurisée et maîtrisée.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <h2 class="text-center fw-bold">Problématique</h2>
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    
                    <p class="card-text">"Comment prendre les bonnes décisions quand vos données sont dispersées, inaccessibles ou peu fiables ?"</p>
                    <p class="card-text">"Diriger une entreprise sans visibilité en temps réel sur les ventes, les finances, les stocks ou les équipes, c'est naviguer à vue. Comment piloter efficacement dans un environnement aussi incertain ?"</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <h2 class="text-center fw-bold">Solution</h2>
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <p class="card-text">Chez KIWAL SARL, nous développons des produits numériques qui répondent à des défis concrets rencontrés par les entreprises en Afrique, en particulier en Guinée. Nos solutions sont conçues pour offrir plus de contrôle, plus de visibilité et plus d'efficacité dans la gestion quotidienne de vos activités.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

        <div class="col-lg-3 col-md-6">
              <div class="service-card">
                <div class="service-icon">💻</div>
                   <h3 class="service-title">Développement logiciel sur mesure</h3>

                    <p class="service-description">Pour répondre à vos besoins spécifiques.</p>

                    <a href="#" class="btn" style="background-color: {{ config('theme.colors.success') }}">En savoir plus</a>

                </div>

            </div> 

            <div class="col-lg-3 col-md-6">

                <div class="service-card">

                    <div class="service-icon">🗂️</div>

                    <h3 class="service-title">Intégration ERP/CRM</h3>

                    <p class="service-description">Avec des solutions robustes comme Odoo, pour une gestion optimale de vos activités.</p>

                    <a href="#" class="btn" style="background-color: {{ config('theme.colors.success') }}">En savoir plus</a>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="service-card">

                    <div class="service-icon">🔒</div>

                    <h3 class="service-title">Cybersécurité</h3>

                    <p class="service-description">Des systèmes de protection avancés pour garantir l'intégrité de vos données.</p>

                    <a href="#" class="btn" style="background-color: {{ config('theme.colors.success') }}">En savoir plus</a>

                </div>

            </div>

           <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">🧠</div>
                    <h3 class="service-title">Recherche en intelligence artificielle</h3>
                    <p class="service-description">Pour anticiper les défis de demain.</p>
                    <a href="#" class="btn" style="background-color: {{ config('theme.colors.success') }}">En savoir plus</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">🚀</div>
                        <h3 class="service-title">Distribution de solutions technologiques</h3>
                        <p class="service-description">Pour une organisation moderne.</p>
                        <a href="#" class="btn" style="background-color: {{ config('theme.colors.success') }}">En savoir plus</a>
                    </div>
            </div>
    </div>

            

        </div>

      
</div>
    <div class="container mt-5 mb-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Notre projet phare : Dashboss</h2>
            <div class="bg-light p-4 rounded">
                <svg width="100%" height="auto" viewBox="0 0 200 150">
                    <rect x="10" y="10" width="180" height="130" fill="none" stroke="#FF6B00" stroke-width="5" rx="10" ry="10" />
                    <rect x="30" y="30" width="80" height="60" fill="none" stroke="#FF6B00" stroke-width="5" rx="5" ry="5" />
                    <path d="M 30 90 L 110 90" stroke="#FF6B00" stroke-width="5" />
                    <path d="M 130 50 L 180 50" stroke="#FF6B00" stroke-width="5" />
                    <path d="M 150 50 L 150 80" stroke="#FF6B00" stroke-width="5" />
                </svg>
            </div>
        </div>
        <div class="col-md-6">
            <p>Disponible sur iOS et Android, Dashboss est une application mobile conçue pour les dirigeants, managers et investisseurs. Elle permet de piloter en temps réel vos ventes, finances, équipes commerciales, stocks et entrepôts grâce à une intégration intelligente avec les modules Odoo (Vente, Achat, Inventaire, Facturation, Comptabilité).</p>
            <p>Avec son système d'Operating Units, Dashboss vous offre une vue territorialisée et personnalisée de votre activité, par agence, magasin ou zone géographique.</p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Rapide</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fiable</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sécuriser</li>
            </ul>
            <button class="btn btn-success rounded-pill">Demander une démo</button>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css">

<style>
    .bg-light {
        background-color: #f8f9fa !important; /* Couleur de fond gris clair */
    }
    svg {
        max-width: 300px; /* Ajustez la taille maximale de l'image SVG */
        margin: 0 auto; /* Centre l'image SVG */
        display: block;
    }
</style>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const serviceCards = document.querySelectorAll('.service-card-container');

            serviceCards.forEach(cardContainer => {
                cardContainer.addEventListener('mouseenter', () => {
                    const card = cardContainer.querySelector('.service-card');
                    card.style.transform = 'translateY(-5px)';
                    card.style.boxShadow = '0 6px 12px rgba(0, 0, 0, 0.2)';
                });

                cardContainer.addEventListener('mouseleave', () => {
                    const card = cardContainer.querySelector('.service-card');
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
                });
            });
        });
    </script>
@endsection



    