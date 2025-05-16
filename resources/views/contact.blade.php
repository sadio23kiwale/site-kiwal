@extends('layouts.app')

@section('content')
   
<body class="bg-light">
    <div class="container py-5">
        <div class="main">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3 class="fw-bold">Vous êtes sur le point de nous contacter ?</h3>
                            <h3 class="fw-bold">Parfait !</h3>
                            <p class="p">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium laudantium reiciendis officiis error.
                                Ratione consequuntur delectus architecto quisquam omnis praesentium pariatur deleniti perspiciatis.
                                Ipsam modi iste officiis laborum aliquam quis.
                            </p>
                            <h3 class="fw-bold">LOCALISATION ICI</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h3 class="h3 text-center">CONTACTEZ - NOUS</h3>
                        </div>
                        <div class="card-body p-4">
                            <div class="form-group mt-2">
                                <label class="fw-bold mb-2">NOM</label>
                                <input type="text" name="name" class="form-control mb-3" placeholder="ENTREZ VOTRE NOM">
                            </div>
                            <div class="form-group">
                                 <label class="fw-bold mb-2">Objectif</label>
                                <input type="email" name="email" class="form-control mb-3" placeholder="ENTREZ VOTRE EMAIL">
                            </div>
                            <div class="form-group">
                                <label class="fw-bold mb-2">Message</label>
                                <textarea name="message" class="form-control mb-3" placeholder="ENTREZ VOTRE MESSAGE" rows="4"></textarea>
                            </div>

                                <button type="submit" class="btn rounded-pill w-100" style="background-color: {{ config('theme.colors.success') }}">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection