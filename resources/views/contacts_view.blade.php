        @include('header')
            @include('menu')
            <h2>{{ $contact->nome }}</h2>
            <div class="contact">
                <fieldset class="dados">
                    <legend>Dados</legend>
                    <dl>
                        <dt>E-mail</dt>
                        <dd>{{ $contact->email }}</dd>
                    </dl>
                    <dl>
                        <dt>Telefone</dt>
                        <dd>{{ $contact->telefone }}</dd>
                    </dl>
                </fieldset>
                <div class="actions">
                    <a class="voltar" href="/contacts">Voltar</a>
                    <a class="editar" href="/contacts/{{ $contact->id }}/edit">Editar</a>
                    <a class="excluir" href="/contacts/{{ $contact->id }}/delete" data-id="{{ $contact->id }}">Excluir</a>
                </div>
            </div>
        @include('footer')