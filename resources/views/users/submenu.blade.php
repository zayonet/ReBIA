@extends('layouts.app')

@section('content')

<div class="container">
        <div class="ui steps">
            <a href="{{route('user.info')}}">
            <div class="@if(request()->is('fill-user-informations*')) active @endif step">
                <i class="user plus icon"></i>
                <div class="content">
                    <div class="title">Info pessoais</div>
                    <div class="description">Dados Pessoais:</div>
                </div>
            </div>
            </a>
            <a href="{{route('user.edu')}}">
                <div class="@if(request()->is('fill-user-educations*')) active @endif  step">
                    <i class="address book outline icon"></i>
                    <div class="content">
                        <div class="title">Situação acadêmica</div>
                        <div class="description">Estoriais acadêmicos</div>
                    </div>
                </div>
            </a>
            <a href="{{route('user.exp')}}">
            <div class="@if(request()->is('fill-user-experiences*')) active @endif  step">
                <i class="tasks icon"></i>
                <div class="content">
                    <div class="title">Experiências</div>
                    <div class="description">Passagens empresarial</div>
                </div>
            </div>
            </a>
            <a href="{{route('user.pro')}}">
            <div class="@if(request()->is('fill-user-profissional-training*')) active @endif  step">
                <i class="file alternate outline icon"></i>
                <div class="content">
                <div class="title">Formação Profissional</div>
                 <div class="description"> Cursos, Linguas-Faladas...</div>
                </div>
            </div>
            </a>
            <a href="{{route('user.cls')}}">
            <div class="@if(request()->is('fill-user-conclusion*')) active @endif  step">
                <i class="thumbs up outline icon"></i>
                <div class="content">
                <div class="title">Conclusão</div>
                </div>
            </div>
            </a>
        </div>

    @yield('fill-user')
@endsection
@section('scripts') @yield('scripts-menu') @endsection