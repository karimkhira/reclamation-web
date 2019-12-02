@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<section class="content-header">
        <h1>
            Modifier Reclamation
            <small>Modifier un Reclamation</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Modifier Reclamation</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Modifier un Reclamation</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {!! Form::open(['action' => ['Admin\reclamationcontroller@update',$breclamation->id], 'method' => 'PUT']) !!}
                                <div class="form-group">
                                    {!! Form::label('date Reclamation', 'Date Reclamation') !!}
                                    {!! Form::text('Date Reclamation',$breclamation->Creer à, ['class' => 'form-control', 'placeholder' => 'Saisir le nom du reclamation','required' => 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('list', 'List') !!}
                                    {!! Form::text('list',$breclamation->List, ['class' => 'form-control', 'placeholder' => 'Saisir le prénom du reclamation','required' => 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('message', 'Message') !!}
                                    {!! Form::text('message',$breclamation->Message, ['class' => 'form-control', 'placeholder' => 'Saisir le prénom du reclamation','required' => 'required']) !!}
                                </div>
                            </div>
    
                        </div>
                            
                            
                            
                         
                
    
    
                       
                            <div class="row">
                            
                                <div class="form-group">
                                    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
    
                        
                    </div> <!-- /.box-body -->
    
    
                </div><!-- /.box -->
    
            </div><!-- /.col -->
        </div> <!-- /.row -->
    </section> <!-- /.content -->
    




@stop


