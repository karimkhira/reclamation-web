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
            <div class="col-md-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Ajout d'un Reclamation</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                            {!! Form::open(['action' => 'reclamationsController@store', 'method' => 'POST']) !!}
                           
                            <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    {!! Form::label('usercreation_id', 'Crée Par') !!}
                                                    {!! Form::select('usercreation_id',$tuser_cre,null, ['class' => 'form-control', 'placeholder' => 'choisir un Agent','required' => 'required']) !!}
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    {!! Form::label('etat_id', 'Etat') !!}
                                                    {!! Form::select('etat_id',$tetat,null, ['class' => 'form-control','placeholder' => 'choisir un etat', 'required' => 'required']) !!}
                                            </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    {!! Form::label('userreparation_id', 'Réparée Par') !!}
                                                    {!! Form::select('userreparation_id',$tuser_rep,null, ['class' => 'form-control', 'placeholder' => 'choisir un Technicien','required' => 'required']) !!}
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                    {!! Form::label('locals_id', 'Lieu') !!}
                                                    {!! Form::select('locals_id',$tlocal_recl,null, ['class' => 'form-control', 'placeholder' => 'choisir lieu','required' => 'required']) !!}
                                            </div>
                                    </div>

                            </div>

                        <div class="row">
                            <div class="col-md-12">
    
                                    <div class="form-group">
                                    {!! Form::label('message', 'Reclamation') !!}
                                    {!! Form::textarea('message','', ['class' => 'form-control', 'placeholder' => 'Saisir message de reclamation','required' => 'required']) !!}
                                </div>
                            </div>                                                                              
                        </div>
                </div-->
    
    
                        </div>
                        <div class="row">
                                <div class="col-md-6"> </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
                                </div>
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
