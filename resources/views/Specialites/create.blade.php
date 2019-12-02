


@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<section class="content-header">
        <h1>
            Nouvelle Fonction
            <small>Ajouter une nouvelle Fonction</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Ajout Fonction</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Ajout d'une Fonction</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {!! Form::open(['action' => 'Admin\fonctioncontroller@store', 'method' => 'POST']) !!}
                                <div class="form-group">
                                    {!! Form::label('fonction', 'Fonction') !!}
                                    {!! Form::text('fonction','', ['class' => 'form-control', 'placeholder' => 'Saisir la fonction','required' => 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Description') !!}
                                    {!! Form::text('description','', ['class' => 'form-control', 'placeholder' => 'Saisir la description','required' => 'required']) !!}
                                </div>
                                
                                    
                            </div>
    
                        </div>
                            
                    
                            
                         
                 
    
    
                        
                        <div class="row">
                            
                                <div class="form-group">
                                    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
                                </div>
                        </div>
                            {!! Form::close() !!}
    
                        
                    </div><!-- /.box-body -->
    
    
                </div><!-- /.box -->
    
            </div><!-- /.col -->
        </div> <!-- /.row -->
    </section> <!-- /.content -->
    
@stop
