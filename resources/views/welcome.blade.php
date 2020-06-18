@extends('layouts.app')

@section('content')
    <div id="app">  
        <hero-section></hero-section>          
        <nav-bar></nav-bar>  
        <loading-icon v-if="$root.loading"></loading-icon>
        <router-view v-if="!$root.loading"></router-view>     
    </div>
@endsection