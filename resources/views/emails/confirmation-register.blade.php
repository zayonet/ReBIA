<h2>Ola! {{$user->name}}, tudo bem? Espero que sim!</h2>
<h3>Obrigado por registrar-se</h3>
<p>
    Por favor confirmar o seu registro ao clicar no <strong> <a href="{{ route('confirm.register.user', ['code' => $user->confirmation_code]) }}">LINK</a></strong> abaixo:
</p>
<p>
    Quando você se inscreve para uma conta da ReBIA ou adiciona um endereço de email à sua conta, enviamos automaticamente uma solicitação a esse email para você confirmar que temos o endereço correto. Para concluir o processo, basta seguir clicar no link de verificação abaixo:
</p>
    <hr>
    <a href="{{ route('confirm.register.user', ['code' => $user->confirmation_code]) }}" class="btn btn-sm btn-info">
        Link de verificação do email
    </a>

<p><small>Data de envio {{date('d/m/Y H:i:s')}},</small></p>