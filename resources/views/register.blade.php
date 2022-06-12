@extends('layouts.app')


@section('contenu')
    

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">
            <div class="card">
                <div class="card-header">S'inscrire</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route("user.register.create")}}">
                        {{-- ! Important --}}
                     @csrf
                     {{-- !  --}}

                        <div class="row mb-3">
                            @if(Session::has('status'))
                            <div class="alert alert-success">
                              {{session::get('status')}}
                            </div>
      
                            @endif

                                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                             @endif
                            <label for="first_name" class="col-sm-3 offset-sm-1 col-form-label">Prénom *</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="first_name" name="first_name" value="Ali">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="last_name" class="col-sm-3 offset-sm-1 col-form-label">Nom *</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 offset-sm-1 col-form-label">Adresse Email *</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" name="email" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-sm-3 offset-sm-1 col-form-label">Téléphone</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 offset-sm-1 col-form-label">Mot de passe *</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-sm-4 offset-sm-1 col-form-label" aria-required="true">Confirmation mot de passe *</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="country" class="col-sm-3 offset-sm-1 col-form-label">Pays *</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="country" name="country">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-3 offset-sm-1 col-form-label">Adresse</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="city" class="col-sm-3 offset-sm-1 col-form-label">Ville</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="postal_code" class="col-sm-3 offset-sm-1 col-form-label">Code postale</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="postal_code" name="postal_code">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="offset-sm-4 col-sm-7">
                                <p>(*) Champs obligatoires</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="offset-sm-4 col-sm-7">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection