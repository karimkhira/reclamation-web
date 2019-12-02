

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="content-header">
        <h1>
            Modifier Fonction
            <small>Modifier une Fonction</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Modifier Fonction</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Modifier une Fonction</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {{ Form::open(['action' => ['Admin\fonctioncontroller@update',$bfonction->id], 'method' => 'PUT'])}}
                                <div class="form-group">
                                    {!! Form::label('fonction', 'Fonction') !!}
                                    {!! Form::text('fonction',$bfonction->Fonction, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Description') !!}
                                    {!! Form::text('description',$bfonction->Description, ['class' => 'form-control', 'required' => 'required']) !!}
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















