@extends('layouts.app')
@section('content')
<div class="container py-5 text-center">
    <h2 class="fw-bold mb-4">Nos services</h2>
    <p class="lead text-muted mb-5">Découvrez comment nous aidons nos clients à réussir</p>
    <div class="row justify-content-center">
        <div class="col-6 col-md-4 col-lg-2 mb-4">
            <div class="d-flex flex-column align-items-center">
                <i class="bi bi-laptop fs-1 mb-2 text-secondary"></i>
                <p class="mt-0 mb-0 small text-muted">Développement de logiciel</p>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-4">
            <div class="d-flex flex-column align-items-center">
                <i class="bi bi-diagram-3-fill fs-1 mb-2 text-secondary"></i>
                <p class="mt-0 mb-0 small text-muted">Intégration ERP/CRM</p>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-4">
            <div class="d-flex flex-column align-items-center">
                <i class="bi bi-shield-lock-fill fs-1 mb-2 text-secondary"></i>
                <p class="mt-0 mb-0 small text-muted">Cybersécurité</p>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-4">
            <div class="d-flex flex-column align-items-center">
                <i class="bi bi-cpu fs-1 mb-2 text-secondary"></i>
                <p class="mt-0 mb-0 small text-muted">Intelligence artificielle</p>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mb-4">
            <div class="d-flex flex-column align-items-center">
                <i class="bi bi-ethernet fs-1 mb-2 text-secondary"></i>
                <p class="mt-0 mb-0 small text-muted">Distribution de solutions technologiques</p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Service en vedette</h2>
            <p>Disponible sur iOS et Android, Dashboss est une application mobile conçue pour les dirigeants, managers et investisseurs. Elle permet de piloter en temps réel vos ventes, finances, équipes commerciales, stocks et entrepôts grâce à une intégration intelligente avec les modules Odoo (Vente, Achat, Inventaire, Facturation, Comptabilité).</p>
            <p>Avec son système d'Operating Units, Dashboss vous offre une vue territorialisée et personnalisée de votre activité, par agence, magasin ou zone géographique.</p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Rapide</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fiable</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sécuriser</li>
            </ul>
            <button class="btn btn-success rounded-pill">Demander une démo</button>
        </div>
        <div class="col-md-6">
          <h1 class="text-center">IMAGE HERE</h1>
            <div class="bg-light p-4 rounded d-flex justify-content-center align-items-center" style="min-height: 250px;">
                <svg width="200" height="150" viewBox="0 0 200 150">
                    <rect x="20" y="10" width="160" height="90" fill="#f8f9fa" stroke="success" stroke-width="5" rx="10" />
                    <rect x="60" y="50" width="80" height="90" fill="#f8f9fa" stroke="dark" stroke-width="5" rx="15" />
                    <path d="M 75 65 L 125 65" stroke="dark" stroke-width="5" />
                    <path d="M 85 140 L 115 140" stroke="dark" stroke-width="5" />
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-6">
          <h1 class="text-center">IMAGE HERE</h1>
            <div class="bg-light p-4 rounded d-flex justify-content-center align-items-center" style="min-height: 250px;">
                <svg width="200" height="150" viewBox="0 0 200 150">
                    <rect x="20" y="10" width="160" height="90" fill="#f8f9fa" stroke="success" stroke-width="5" rx="10" />
                    <rect x="60" y="50" width="80" height="90" fill="#f8f9fa" stroke="dark" stroke-width="5" rx="15" />
                    <path d="M 75 65 L 125 65" stroke="dark" stroke-width="5" />
                    <path d="M 85 140 L 115 140" stroke="dark" stroke-width="5" />
                </svg>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Développement logiciel sur mesure</h2>
            <p>Disponible sur iOS et Android, Dashboss est une application mobile conçue pour les dirigeants, managers et investisseurs. Elle permet de piloter en temps réel vos ventes, finances, équipes commerciales, stocks et entrepôts grâce à une intégration intelligente avec les modules Odoo (Vente, Achat, Inventaire, Facturation, Comptabilité).</p>
            <p>Avec son système d'Operating Units, Dashboss vous offre une vue territorialisée et personnalisée de votre activité, par agence, magasin ou zone géographique.</p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Rapide</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fiable</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sécuriser</li>
            </ul>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>INTEGRATION</h2>
            <p>Disponible sur iOS et Android, Dashboss est une application mobile conçue pour les dirigeants, managers et investisseurs. Elle permet de piloter en temps réel vos ventes, finances, équipes commerciales, stocks et entrepôts grâce à une intégration intelligente avec les modules Odoo (Vente, Achat, Inventaire, Facturation, Comptabilité).</p>
            <p>Avec son système d'Operating Units, Dashboss vous offre une vue territorialisée et personnalisée de votre activité, par agence, magasin ou zone géographique.</p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Rapide</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fiable</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sécuriser</li>
            </ul>
            <button class="btn btn-success rounded-pill">Demander une démo</button>
        </div>
        <div class="col-md-6">
          <h1 class="text-center">IMAGE HERE</h1>
            <div class="bg-light p-4 rounded d-flex justify-content-center align-items-center" style="min-height: 250px;">
                <svg width="200" height="150" viewBox="0 0 200 150">
                    <rect x="20" y="10" width="160" height="90" fill="#f8f9fa" stroke="success" stroke-width="5" rx="10" />
                    <rect x="60" y="50" width="80" height="90" fill="#f8f9fa" stroke="dark" stroke-width="5" rx="15" />
                    <path d="M 75 65 L 125 65" stroke="dark" stroke-width="5" />
                    <path d="M 85 140 L 115 140" stroke="dark" stroke-width="5" />
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-6">
          <h1 class="text-center">IMAGE HERE</h1>
            <div class="bg-light p-4 rounded d-flex justify-content-center align-items-center" style="min-height: 250px;">
                <svg width="200" height="150" viewBox="0 0 200 150">
                    <rect x="20" y="10" width="160" height="90" fill="#f8f9fa" stroke="success" stroke-width="5" rx="10" />
                    <rect x="60" y="50" width="80" height="90" fill="#f8f9fa" stroke="dark" stroke-width="5" rx="15" />
                    <path d="M 75 65 L 125 65" stroke="dark" stroke-width="5" />
                    <path d="M 85 140 L 115 140" stroke="dark" stroke-width="5" />
                </svg>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Cybersécurité</h2>
            <p>Disponible sur iOS et Android, Dashboss est une application mobile conçue pour les dirigeants, managers et investisseurs. Elle permet de piloter en temps réel vos ventes, finances, équipes commerciales, stocks et entrepôts grâce à une intégration intelligente avec les modules Odoo (Vente, Achat, Inventaire, Facturation, Comptabilité).</p>
            <p>Avec son système d'Operating Units, Dashboss vous offre une vue territorialisée et personnalisée de votre activité, par agence, magasin ou zone géographique.</p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Rapide</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fiable</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sécuriser</li>
            </ul>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Recherche en Intelligence Artificielle</h2>
            <p>Disponible sur iOS et Android, Dashboss est une application mobile conçue pour les dirigeants, managers et investisseurs. Elle permet de piloter en temps réel vos ventes, finances, équipes commerciales, stocks et entrepôts grâce à une intégration intelligente avec les modules Odoo (Vente, Achat, Inventaire, Facturation, Comptabilité).</p>
            <p>Avec son système d'Operating Units, Dashboss vous offre une vue territorialisée et personnalisée de votre activité, par agence, magasin ou zone géographique.</p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Rapide</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fiable</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sécuriser</li>
            </ul>
            <button class="btn btn-success rounded-pill">Demander une démo</button>
        </div>
        <div class="col-md-6">
          <h1 class="text-center">IMAGE HERE</h1>
            <div class="bg-light p-4 rounded d-flex justify-content-center align-items-center" style="min-height: 250px;">
                <svg width="200" height="150" viewBox="0 0 200 150">
                    <rect x="20" y="10" width="160" height="90" fill="#f8f9fa" stroke="success" stroke-width="5" rx="10" />
                    <rect x="60" y="50" width="80" height="90" fill="#f8f9fa" stroke="dark" stroke-width="5" rx="15" />
                    <path d="M 75 65 L 125 65" stroke="dark" stroke-width="5" />
                    <path d="M 85 140 L 115 140" stroke="dark" stroke-width="5" />
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-6">
          <h1 class="text-center">IMAGE HERE</h1>
            <div class="bg-light p-4 rounded d-flex justify-content-center align-items-center" style="min-height: 250px;">
                <svg width="200" height="150" viewBox="0 0 200 150">
                    <rect x="20" y="10" width="160" height="90" fill="#f8f9fa" stroke="success" stroke-width="5" rx="10" />
                    <rect x="60" y="50" width="80" height="90" fill="#f8f9fa" stroke="dark" stroke-width="5" rx="15" />
                    <path d="M 75 65 L 125 65" stroke="dark" stroke-width="5" />
                    <path d="M 85 140 L 115 140" stroke="dark" stroke-width="5" />
                </svg>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Distribution des solutions informatiques</h2>
            <p>Disponible sur iOS et Android, Dashboss est une application mobile conçue pour les dirigeants, managers et investisseurs. Elle permet de piloter en temps réel vos ventes, finances, équipes commerciales, stocks et entrepôts grâce à une intégration intelligente avec les modules Odoo (Vente, Achat, Inventaire, Facturation, Comptabilité).</p>
            <p>Avec son système d'Operating Units, Dashboss vous offre une vue territorialisée et personnalisée de votre activité, par agence, magasin ou zone géographique.</p>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Rapide</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fiable</li>
                <li class="d-flex align-items-center mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sécuriser</li>
            </ul>
        </div>
    </div>
</div>
{{--   <p class="text-center">SERVICE HERE</p>
  <div class="row">
  <div class="col-md-3">
    <div class="card">
      <div class="card-body" style="text-align: center;">Service 1</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <div class="card-body" style="text-align: center;">Service 2</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <div class="card-body" style="text-align: center;">Service 3</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
      <div class="card-body" style="text-align: center;">Service 4</div>
    </div>
  </div>
</div> --}}

@endsection