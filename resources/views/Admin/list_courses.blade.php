@extends('layouts.app')

@section('contenu')
    

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">
            <div class="card">
                <div class="card-header">Liste des Cours</div>

                <div class="card-body">
				  <div class="table-responsive ">
					<table class="table table-striped table-hover" >
					  <thead>
						<tr>
						  <th>Nom</th>
						  <th>icone</th>
						  <th>description</th>
              <th>texte</th>
              <th>date_creation</th>
						  <th>Action</th>
						</tr>
					  </thead>
					  <tbody>
                          @foreach ($list_courses as $item)
                          <tr style="overflow:hidden">
                            <td>{{$item->nom}}</td>
                            <td>{{$item->icone}}</td>
                            <td >{{$item->description}}</td>
                            <td>{{$item->texte}}</td>
                            <td>{{$item->date_creation}}</td>
                            
                          
                              <td >
                                <a class="btn btn-primary btn-sm" href="{{route('cours.edit', $item->id)}}" role="button">Détail</a>
                                <a class="btn btn-danger btn-sm"   href="{{route('cours.deleteCours', $item->id)}}" role="button">Supprimer</a>
                              </td>
                            </div>
                           
                          </tr>
                          @endforeach
					  </tbody>
					</table>
				  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection