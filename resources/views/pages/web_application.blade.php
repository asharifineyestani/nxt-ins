@extends('layouts.master')
@section('content')
    @include('sections.hero.web')
    <x-portfolio/>
    <x-storyWeb/>




    @include('sections.cta.call')
@endsection
