
@extends('adminlte::page')

@section('title')



@section('content')
<div class="container">
  <h2><center>Gestion des Etats </center></h2>
  
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
  
            <a href="etats/{{$etats->id}}/edit" class="btn btn-info btn-xs ">
              <i class="fas fa-edit"></i>
          </a>
                
         {!! Form::open(['action' => ['etatsController@destroy', $etats->id],'method'=>'DELETE']) !!}
           
        <a onclick="return confirm('Etes vous sûr(e) de vouloir supprimer cette etat ?')">
              {{ Form::button('',['type' => 'submit', 'class' => 'btn btn-danger btn-xs fas fa-trash-alt'] )  }}
            
           </a>
         
         
         {!! Form::close() !!}



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

