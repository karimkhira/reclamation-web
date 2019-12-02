


@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="content-header">
        <h1>
            Modifier notification
            <small>Modifier une Notification</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
            <li class="active">Modifier Notification</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid box-success">
                    <div class="box-header">
                        <h3 class="box-title">Modifier une Notification</h3>
                    </div>
                    <!-- /.box-header -->
    
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
    
                                {{ Form::open(['action' => ['Admin\notificationcontroller@update',$bnotification->id], 'method' => 'PUT'])}}
                                <div class="form-group">
                                    {!! Form::label('notification', 'Notification') !!}
                                    {!! Form::text('notification',$bnotification->TexteNotif, ['class' => 'form-control', 'required' => 'required']) !!}
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















