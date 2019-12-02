@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content')
<div class="container">
  <h2><center>Gestion des Fonctions</center></h2>
  
  <a href="fonction/create"><button type="button" class="btn btn-primary right action_create">AJOUTER</button></a>
             
  <table class="table table-hover">
    <thead>
      <tr>
       
        <th>Fonction</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
      			
    </thead>
    <tbody>
        @foreach($bfonctions as $fonction)
      <tr>
        <td>{{$fonction->Fonction}} </td>
        <td>{{$fonction->Description}} </td>
        <td class="action_td">

            <a href="fonction/{{$fonction->id}}/edit" class="btn btn-info btn-xs">
              <i class="glyphicon glyphicon-edit"></i>
          </a>
          <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-supp">
              <i class="glyphicon glyphicon-trash"></i>
          </a>
          <div class="modal modal-danger fade" id="modal-supp">
              {!! Form::open(['action' => ['Admin\fonctioncontroller@destroy',
              $fonction->id],'method'=>'DELETE']) !!}
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title" >Suppression Fonction</h4>
                      </div>
                      <div class="modal-body" style="color:#D33724!important;background-color: white!important">
                        <p> êtes-vous sûr de vouloir supprimer cette Fonction ?</p>
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

