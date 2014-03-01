@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
                {{Input::flash()}}
                {{Form::open(array('url' => 'foo/bar')) }}
                <div class="form-group">
                {{Form::email('username',null,array('class' => 'form-control','placeholder'=>'Username'))}}
                {{Form::password('password',array('class' => 'form-control','placeholder'=>'Password'))}}
                </div>
                <div class="checkbox">
                {{Form::label('remember', 'Remember me?', array('class' => 'form-control')) }}
                {{Form::checkbox('remember', 'yes', false)}}
                </div>
                {{Form::submit('Login',array('class' => 'btn btn-primary'))}}
                {{Form::close()}}
        </div>
    </div>
@stop
