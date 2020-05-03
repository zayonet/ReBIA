@extends('layouts.app')
    
@section('content')
    <div class="container">
        <div class="col-md-6 offset-3">    
             <div class="alert alert-info" role="alert">
                 Parabens {{Auth::user()->name}}! Você agora tem o seu próprio perfil no ReBIA.
             </div>    
            <div class="">
                <h2 class="text-info">Agora, confira seu email </h2>
                <h5>Verificação de email da ReBIA</h5>
                <p class="mb-0">
                   Para completar o seu registro, enviamos um email de confirmação no endereço electrônico "<strong  class="text-info">{{Auth::user()->email}}</strong>". Verifique o seu email, por favor! 
                </p>
                <h6 class="mt-2 text-danger">Caso não encontre na sua caixa de entrada, verifique no seu "SPAM"</h6>
            </div> 
        </div>
    </div>
@endsection