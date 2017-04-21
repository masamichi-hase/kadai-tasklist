@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    
    @include('commons.error_messages')
    
    <div class="row">
        <div class="col-xs-12">
        <div class="col-sm-offset-2 col-sm-6 col-md-6">
        <div class="col-lg-offset-3 col-sm-3">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
            
                <div class="form-group">
                    {!! Form::label('status', 'タイトル:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    </div>