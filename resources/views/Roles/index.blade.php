
@extends('adminlte::page')

@section('title')



@section('content')
<div class="container">
  <h2><center>Gestion des Roles </center></h2>
  
  <a href="roles/create"><button type="button" class="btn btn-primary right action_create">AJOUTER</button></a>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>roles</th>
        <th>Actions</th>
      </tr>
      			
    </thead>
    <tbody>
        @foreach($broles as $roles)
      <tr>
        <td>{{$roles->role}} </td>
        
        <td class="action_td">
  
            <a href="roles/{{$roles->id}}/edit" class="btn btn-info btn-xs ">
              <i class="fas fa-edit"></i>
          </a>
                
         {!! Form::open(['action' => ['rolesController@destroy', $roles->id],'method'=>'DELETE']) !!}
           
        <a onclick="return confirm('Etes vous sûr(e) de vouloir supprimer ce role ?')">
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

