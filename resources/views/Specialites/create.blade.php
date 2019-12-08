@extends('adminlte::page')

@section('title')

@section('content')
<section class="content-header">
        <h1>
            Nouvelle Specialite
            <small>Ajouter une nouvelle Specialite</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/specialites"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Ajout Specialite</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Ajout Specialite</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {!!Form :: open(['action' => 'specialitesController@store', 'method' => 'POST'])!!}
                                <div class="form-group">
                                    {!! Form :: label('specialites', 'specialite') !!}
                                    {!! Form :: text('specialites','', ['class' => 'form-control', 'placeholder' => 'Saisir specialite','required' => 'required']) !!}
                                </div>
                                
                                    
                            </div>
    
                        </div>                                                            
                        <div class="row">
                            
                                <div class="form-group">
                                    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
                                     {!! Form::close() !!}
                                </div>
                        </div>
                           
    
                        
                    </div><!-- /.box-body -->
    
    
                </div><!-- /.box -->
    
            </div><!-- /.col -->
        </div> <!-- /.row -->
    </section> <!-- /.content -->
    
@stop
