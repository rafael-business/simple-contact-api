<html>
    @include('head')
    <body>
        <div class="container">
            <div class="notification">
                @if( app('request')->input('status') == 'success' )
                    <div class="success">Contato adicionado com Sucesso!</div>
                @elseif( app('request')->input('status') == 'updated' )
                    <div class="updated">Contato atualizado com Sucesso!</div>
                @elseif( app('request')->input('status') == 'destroy' )
                    <div class="destroy">Contato excluído com Sucesso!</div>
                @elseif( app('request')->input('status') == 'error' )
                    <div class="error">ERRO: Sua solicitação não foi atendida.</div>
                @endif
            </div>
            <div class="header">
                <div class="title">
                    <h1>{{ env('APP_TITLE') }}</h1>
                </div>