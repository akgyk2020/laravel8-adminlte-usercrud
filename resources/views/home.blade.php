@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h4 class="m-0 text-dark" style="background:#008b8b;color:#fff "><marquee behavior="" direction:"">Dashboard POS</marquee></h4>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{session('status')}}
                    </div>
                @endif
                     
                </div>
            </div>
        </div>
    </div>
   
    <div class="col-md-3">
        <div class="card">
          <div class="card-header">{{ ('Dashboard')}}</div>
          <div class="card-body"></div>
        </div>
    </div>
</div>
   
 

@stop
