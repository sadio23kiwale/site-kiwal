<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-3 border-end border-orange border-3 pe-3">
                <div class="d-flex align-items-center mb-2">
                    <img src="votre-logo.png" alt="Logo Kiwal" class="img-fluid me-3" style="max-width: 80px;">
                    <h6>Contact</h6>
                </div>
                <div>
                    <p class="mb-1"><i class="bi bi-envelope me-2"></i> <a href="mailto:dianbarry@kiwale.com" class="text-white">dianbarry@kiwale.com</a></p>
                    <p class="mb-0"><i class="bi bi-telephone-fill me-2"></i> +224 623 99 05 00</p>
                </div>
            </div>
            <div class="col-md-3 offset-md-1 border-end border-orange border-3 ps-3">
                <h6>Services</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Développement logiciel sur mesure</a></li>
                    <li><a href="#" class="text-white">Intégration ERP/CRM avec des solutions comme Odoo</a></li>
                    <li><a href="#" class="text-white">Cybersécurité</a></li>
                    <li><a href="#" class="text-white">Recherche en intelligence artificielle</a></li>
                    <li><a href="#" class="text-white">Distribution de solutions technologiques</a></li>
                </ul>
            </div>
            <div class="col-md-3 offset-md-1 ps-3">
                <h6>Tarifs</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Tarifs pour produits</a></li>
                    <li><a href="#" class="text-white">Tarifs pour services</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="text-center py-3" style="background-color: {{ config('theme.colors.grey') }}">
    <div class="container d-flex justify-content-between align-items-center">
        <p>© 2025 Kiwale Sarl</p>
        <div class="d-flex align-items-center">
            <button class="btn btn-outline-secondary rounded-pill me-2" disabled><i class="fas fa-chevron-left"></i></button>
            <span class="text-muted">4 / 6</span>
            <button class="btn btn-outline-secondary rounded-pill ms-2"><i class="fas fa-chevron-right"></i></button>
            <a href="#" class="text-white text-decoration-none ms-3">Restart</a>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQmOX/RyT2Yn0wThTuSby6jJWnuGYWQP0/odxWixyofbe+ixFjvqqMhegqzWwXjYkmFGZTFIXVnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .border-orange {
        border-color: #FF6B00 !important; /* Remplacez par votre code couleur orange */
    }
    .footer .row {
        flex-wrap: wrap; /* Permet aux colonnes de passer à la ligne si nécessaire */
        align-items: flex-start; /* Aligne le haut des colonnes */
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css">
{{-- <footer class="text-white py-7" style="background-color: {{ config('theme.colors.dark') }}">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <p class="h5 mb-4" style="color: {{ config('theme.colors.orange') }}">En Savoir plus sur nos services</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 style="color: {{ config('theme.colors.orange') }}">Contact</h3>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope text-warning me-3"></i>
                        <p><a href="mailto:dianbarry@kiwale.com" class="text-white">dianbarry@kiwale.com</a></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone-alt text-warning me-3"></i>
                        <p>+224 623 99 05 00</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="footer-divider d-none d-lg-block"></div>
                    <h3 style="color: {{ config('theme.colors.orange') }}">Services</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Développement logiciel sur mesure</a></li>
                        <li><a href="#" class="text-white">Intégration ERP/CRM avec des solutions comme Odoo</a></li>
                        <li><a href="#" class="text-white">Cybersécurité</a></li>
                        <li><a href="#" class="text-white">Recherche en intelligence artificielle</a></li>
                        <li><a href="#" class="text-white">Distribution de solutions technologiques</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="footer-divider d-none d-lg-block"></div>
                    <h3 style="color: {{ config('theme.colors.orange') }}">Tarifs</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Tarifs pour produits</a></li>
                        <li><a href="#" class="text-white">Tarifs pour services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center py-3" style="background-color: {{ config('theme.colors.grey') }}">
        <div class="container d-flex justify-content-between align-items-center">
            <p>© 2025 Kiwale Sarl</p>
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary rounded-pill me-2" disabled><i class="fas fa-chevron-left"></i></button>
                <span class="text-muted">4 / 6</span>
                <button class="btn btn-outline-secondary rounded-pill ms-2"><i class="fas fa-chevron-right"></i></button>
                <a href="#" class="text-white text-decoration-none ms-3">Restart</a>
            </div>
        </div>
    </div> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous">
</script>
</body>

</html>