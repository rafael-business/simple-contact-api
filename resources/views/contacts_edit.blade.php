        @include('header')
            @include('menu')
            <h2>{{ $contact->nome }} &rarr; Editar</h2>
            <form action="/contacts/{{ $contact->id }}" method="POST">
                @method('PUT')
                <div class="field">
                    <label for="nome">Nome</label>
                    <input type="text" size="45" name="nome" value="{{ $contact->nome }}" />
                </div>
                <div class="field">
                    <label for="email">E-mail</label>
                    <input type="text" size="90" name="email" value="{{ $contact->email }}" />
                </div>
                <div class="field">
                    <label for="telefone">Telefone</label>
                    <input type="text" size="15" name="telefone" value="{{ $contact->telefone }}" />
                </div>
                <input class="btn btn_salvar" type="submit" value="Salvar" />
                @csrf
            </form>
        @include('footer')