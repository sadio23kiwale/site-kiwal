@extends('layouts.app')
@section('content')
   
 <main>
        <div class="container py-5">
            <section class="text-center mb-5">
                <h2 class="fw-bold  display-3" style="color: {{ config('theme.colors.orange') }}">Qui sommes-Nous</h2>
                <p class="text-muted">Apprenez d'avantage sur notre entreprise</p>
            </section>

            <section class="row mb-5">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <p class="lead">
                        KIWAL SARL est une entreprise technologique guinéenne spécialisée
                        dans la création de solutions numériques innovantes, adaptées aux réalités locales
                        Nous accompagnons les entreprises, institutions et organisations dans leur transformation digitale à travers une offre complète et intégrée.
                    </p>
                </div>
            </section>

            <section class="values-section">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Intégrité" class="rounded-circle mb-3">
                                <h3 class="card-title fw-semibold">Intégrité</h3>
                                <p class="card-text">Nous agissons avec honnêteté, transparence et respect, en toutes circonstances. La confiance est au cœur de toutes nos relations professionnelles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Engagement" class="rounded-circle mb-3">
                                <h3 class="card-title fw-semibold">Engagement</h3>
                                <p class="card-text">Nous nous impliquons pleinement dans chaque projet avec rigueur et responsabilité. Notre priorité : accompagner nos clients jusqu'à la réussite.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Innovation" class="rounded-circle mb-3">
                                <h3 class="card-title fw-semibold">Innovation</h3>
                                <p class="card-text">Nous cultivons un esprit d'audace pour proposer des solutions technologiques de pointe. L'innovation guide nos actions pour anticiper et relever les défis de demain.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="values-section mt-5">
              <h3>Membre de l'equipe</h3>
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Intégrité" class="rounded-circle mb-3">
                                <h3 class="card-title fw-semibold">USER</h3>
                                <p class="card-text">USER 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Engagement" class="rounded-circle mb-3">
                                <h3 class="card-title fw-semibold">USER</h3>
                                <p class="card-text">USER 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column align-items-center">
                                <img src="https://via.placeholder.com/50" alt="Innovation" class="rounded-circle mb-3">
                                <h3 class="card-title fw-semibold">USER</h3>
                                <p class="card-text">USER 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bg-light py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 bg-white p-4 rounded shadow-sm border">
                            <p class="lead text-center mb-0 fw-bold">
                                « La performance commence avec une vision claire.<br>
                                Donnez à votre entreprise les outils pour aller plus loin, dès aujourd'hui. »
                            </p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="py-5 text-center" style="background-color: {{ config('theme.colors.orange') }}">
            <h2 class="text-white mb-3">En Savoir plus sur nos services</h2>
            <p class="text-white mb-3">Contactez-nous dès maintenant</p>
            <button class="btn btn-lg rounded-pill" style="background-color: {{ config('theme.colors.success') }}">Nous contacter</button>
        </div>
        </div>
    </main>
@endsection