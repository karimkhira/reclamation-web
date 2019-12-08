
@extends('adminlte::page')

@section('title')



@section('content')
<div class="container">
  <h2><center>Gestion des Specialites </center></h2>
  
  <a href="specialites/create"><button type="button" class="btn btn-primary right action_create">AJOUTER</button></a>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Specialites</th>
        <th>Actions</th>
      </tr>
      			
    </thead>
    <tbody>
        @foreach($bspecialites as $specialites)
      <tr>
        <td>{{$specialites->specialite}} </td>
        
        <td class="action_td">
  
            <a href="specialites/{{$specialites->id}}/edit" class="btn btn-info btn-xs ">
              <i class="fas fa-edit"></i>
          </a>
                
         {!! Form::open(['action' => ['specialitesController@destroy', $specialites->id],'method'=>'DELETE']) !!}
           
        <a onclick="return confirm('Etes vous sûr(e) de vouloir supprimer cette specialite ?')">
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

