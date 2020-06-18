@extends('layouts.app')

@section('content')
    <div id="app">  
        <hero-section></hero-section>          
        <nav-bar></nav-bar>  
        <router-view></router-view>     
    </div>
@endsection