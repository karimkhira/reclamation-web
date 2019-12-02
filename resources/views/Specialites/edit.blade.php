

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="content-header">
        <h1>
            Modifier specialite
            <small>Modifier une specialite</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Modifier specialite</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Modifier une specialite</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {{ Form::open(['action' => ['Admin\specialitecontroller@update',$bspecialite->id], 'method' => 'PUT'])}}
                                <div class="form-group">
                                    {!! Form::label('specialite', 'specialite') !!}
                                    {!! Form::text('specialite',$bspecialite->Specialite, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Description') !!}
                                    {!! Form::text('description',$bspecialite->Description, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
    
                        </div>                    
                        
                        <div class="row">
                            
                                <div class="form-group">
                                    {!! Form::submit('Modifier', ['class' => 'btn btn-success']) !!}
                                </div>
                        </div>
                            {!! Form::close() !!}
    
                        
                    </div> <!-- /.box-body -->
    
    
                </div><!-- /.box -->
    
            </div><!-- /.col -->
        </div> <!-- /.row -->
    </section> <!-- /.content -->
    




@stop















