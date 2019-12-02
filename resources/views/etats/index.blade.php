
@extends('adminlte::page')

@section('title')



@section('content')
<div class="container">
  <h2><center>Gestion Etats des Reclamations</center></h2>
  
  <a href="etats/create"><button type="button" class="btn btn-primary right action_create">AJOUTER</button></a>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Etats</th>
        <th>Actions</th>
      </tr>
      			
    </thead>
    <tbody>
        @foreach($betats as $etats)
      <tr>
        <td>{{$etats->etat}} </td>
        
        <td class="action_td">
  
            <a href="etats/{{$etats->id}}/edit" class="btn btn-info btn-xs">
              <i class="glyphicon glyphicon-edit"></i>Modifier
          </a>
                
          <a type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-supp">
            <i class="glyphicon glyphicon-trash"></i>          Supprimer

        </a>
        <div class="modal modal-warning fade" id="modal-supp">
            {!! Form::open(['action' => ['etatsController@destroy', $etats->id],'method'=>'DELETE']) !!}
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" >Suppression etats</h4>
                    </div>
                    <div class="modal-body" style="color:#000000!important;background-color: white!important">
                        <p> êtes-vous sûr de vouloir supprimer cette etats ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left"
                            data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-outline">Oui</button>
                    </div>
         </td>
      </tr>
      @endforeach    
    </tbody>
  </table>
  
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Precedent</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
  </ul>

</div>
@stop

