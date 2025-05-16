@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container py-5" style="background-color: {{ config('theme.colors.orange') }}">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card bg-light h-100">
                    <div class="card-body d-flex flex-column justify-content-between align-items-start">
                        <h5 class="card-title fw-bold">Offre standard</h5>
                        <p class="card-text">Nous proposons des services numériques de qualité, adaptés à vos besoins et à votre budget. Nos tarifs sont donnés à titre indicatif et peuvent varier selon la complexité du projet.</p>
                        <a href="#" class="btn btn-success rounded-pill">Démarrer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-light h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Offre personnalisée</h5>
                        <p class="card-text mb-3">Nous proposons des devis sur mesure pour les projets plus complexes ou spécifiques</p>
                        <a href="#" class="btn btn-outline-success rounded-pill">Contacter nous</a>
                        <div class="mt-4">
                            <div class="bg-white p-3 rounded border mb-3">
                                <h6 class="fw-bold mb-0">Remise sur volume</h6>
                            </div>
                            <div class="bg-white p-3 rounded border mb-3">
                                <h6 class="fw-bold mb-0">Réduction en cas de souscriptions multiples</h6>
                            </div>
                            <div class="bg-white p-3 rounded border">
                                <h6 class="fw-bold mb-0">Tarifs spécifiques par pays</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5 mb-5" style="background-color: {{ config('theme.colors.grey') }}">
        <div class="card-bodyt" style="background-color: {{ config('theme.colors.grey') }}">
            <div class="container mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Service</th>
                            <th scope="col" class="text-center">Détail</th>
                            <th scope="col" class="text-center">Tarif estimatif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="bi bi-chat-dots me-2"></i> Développement de logiciel sur mesure</td>
                            <td>Application web ou desktop simple (1 à 2 modules)</td>
                            <td class="text-end">À partir de 15 000 000 GNF (~1 300 €)</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-phone me-2"></i> Application mobile (Android/IOS)</td>
                            <td>Application simple avec design personnalisé</td>
                            <td class="text-end">À partir de 20 000 000 GNF (~1 700 €)</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-puzzle-fill me-2"></i> Intégration ERP/CRM (Odoo)</td>
                            <td>Mise en place d'un module de base + paramétrage utilisateur</td>
                            <td class="text-end">À partir de 10 000 000 GNF (~850 €)</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-shield-lock-fill me-2"></i> Audit cybersécurité de base</td>
                            <td>Diagnostic de sécurité + rapport et recommandations</td>
                            <td class="text-end">À partir de 5 000 000 GNF (~430 €)</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-cpu me-2"></i> Prototype IA (simple)</td>
                            <td>Exemple : chatbot ou classification automatique</td>
                            <td class="text-end">À partir de 12 000 000 GNF (~1 000 €)</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-globe me-2"></i> Site web vitrine professionnel</td>
                            <td>3 à 5 pages + formulaire de contact + responsive</td>
                            <td class="text-end">À partir de 4 000 000 GNF (~340 €)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center vh-50 mb-3">
        <div class="card p-2 text-center">
           <h2 class="fw-bold mb-2"><span class="text-warning">KIWAL</span> <span class="text-success">SARL</span></h2>
            <h2 class="fw-bold mb-2">Paiement</h2>
            <p class="text-muted mb-3">Effectuer un paiement en toute sécurité</p>
            <button class="btn rounded-pill btn-lg" style="background-color: {{ config('theme.colors.success') }}">Commencer</button>
        </div>
    </div>
</div>
@endsection