@extends('layouts.app')
@section('contenu')
    
{{-- start template --}}
<div class="row">
    <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">
        <div class="card">
            <div class="card-header">Nouveau cours</div>

            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{route('cours.save')}}" enctype="multipart/form-data">
                  {{-- ! Important --}}
                  @csrf 
                  {{-- ! --}}
                  <div class="row mb-3">
                      @if(Session::has('status'))
                      <div class="alert alert-success">
                        {{session::get('status')}}
                      </div>

                      @endif
                        <label for="course_name" class="col-sm-3 offset-sm-1 col-form-label">Nom</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="course_name" name="course_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="icon_url" class="col-sm-3 offset-sm-1 col-form-label">URL icone</label>
                        <div class="col-sm-7">
                          <input type="file" class="form-control" id="icon_url" name="icon_url">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-3 offset-sm-1 col-form-label">Description</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="description" name="description">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="course_text" class="col-sm-3 offset-sm-1 col-form-label">Texte</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" rows="7" id="course_text" name="course_text">Hello, World!</textarea>
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





{{-- end template --}}
  @endsection
