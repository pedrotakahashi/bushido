@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    <div class="row vertical-align">
        <div class="col-xs-12 col-md-12 col-lg-4">
            <div>
                <h1>Olá Bem Vindo(a)</h1>
                <span><?php
                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                echo strftime('%A, %d de %B de %Y', strtotime('today')); ?></span>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
            <div>
                <div class="select-periodo">
                    <select class="sel-espand">
                      <option>Periodo</option>
                      <option value="{{strftime('%m,%Y', strtotime('today'))}}">{{ strftime('%B %Y', strtotime('today'))}}</option>
                      <option value="{{strftime('%m,%Y', strtotime("-1 month"))}}">{{ strftime('%B %Y', strtotime("-1 month"))}}</option>
                      <option value="{{strftime('%m,%Y', strtotime("-2 month"))}}">{{ strftime('%B %Y', strtotime("-2 month"))}}</option>
                    </select>
                  </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-4">

        </div>
    </div>
</div>
@stop
@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-4">
        
            <!-- Fluid width widget -->        
    	    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-comment"></span> 
                      Calendário de Aulas
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                       
                    </ul>
                </div>
            </div>
            <!-- End fluid width widget --> 
            
		</div>
		<div class="col-md-4">
        
            <!-- Fluid width widget -->        
    	    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-comment"></span> 
                        
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                       
                    </ul>
                </div>
            </div>
            <!-- End fluid width widget --> 
            
		</div>
	</div>
</div>
@stop

@section('adminlte_js')

@stop
