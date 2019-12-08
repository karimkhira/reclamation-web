@extends('adminlte::page')

@section('title')

@section('content')
<section class="content-header">
        <h1>
            Nouveau role
            <small>Ajouter un nouveau role</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/roles"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Ajout role</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Ajout role</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {!!Form :: open(['action' => 'rolesController@store', 'method' => 'POST'])!!}
                                <div class="form-group">
                                    {!! Form :: label('roles', 'role') !!}
                                    {!! Form :: text('roles','', ['class' => 'form-control', 'placeholder' => 'Saisir role','required' => 'required']) !!}
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
