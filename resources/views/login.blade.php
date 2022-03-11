@include('head');
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">
            <div class="card">
                <div class="card-header">Connexion</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST">



                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 offset-sm-1 col-form-label">Adresse Email</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 offset-sm-1 col-form-label">Mot de passe</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="password" name="password">
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
@include('foot');