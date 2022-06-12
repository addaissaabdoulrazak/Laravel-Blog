@extends('layouts.app')

@section('contenu')
    

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">

            <div class="card">
                <div class="card-header">Info Contact</div>

                <div class="card-body">

                    <form class="form-horizontal">

                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Nom</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">{{$infoDetail->name}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">{{$infoDetail->email}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Téléphone</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">{{$infoDetail->phone}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Sujet</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">{{$infoDetail->subject}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Date</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">{{$infoDetail->create_at}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Message</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">
                                    {{$infoDetail->message}}
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p><a href="{{route('admin.contact')}}" role="button" class="btn btn-success m-2"><i class="bi bi-box-arrow-left"></i> Liste Contacts</a></p>
        </div>
    </div>
</div>
@endsection