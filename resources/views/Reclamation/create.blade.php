@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<section class="content-header">
        <h1>
            Nouveau Reclamation
            <small>Ajouter un nouveau Reclamation</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Ajout Reclamation</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Ajout d'un Reclamation</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {!! Form::open(['action' => 'Admin\reclamationcontroller@store', 'method' => 'POST']) !!}
                                <div class="form-group">
                                    {!! Form::label('date Reclamation', 'Date Reclamation') !!}
                                    {!! Form::text('Date Reclamation',$breclamation->Creerà, ['class' => 'form-control', 'placeholder' => 'Saisir le nom du reclamation','required' => 'required']) !!}
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('reclamation', 'Reclamation') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-phone"></i>
                                        </div>
                                        {!! Form::text('reclamation','', ['class' => 'form-control','required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                        </div>
                                        {!! Form::email('email','', ['class' => 'form-control','pattern' =>
                                        '[A-za-z0-9_\.-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' =>
                                        'Reclamation@email.com','required' => 'required']) !!}
                                    </div>
                                </div>
                           
    
                                </div>
                            </div>
                            
                         </div>
                </div-->
    
    
                        </div>
                        <div class="row">
                            
                                <div class="form-group">
                                    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
    
                        </div>
                    </div> <!-- /.box-body -->
    
    
                </div><!-- /.box -->
    
            </div><!-- /.col -->
        </div> <!-- /.row -->
    </section> <!-- /.content -->
    
@stop
