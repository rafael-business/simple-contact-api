        @include('header')
            @include('menu')
            <h2>Exclusão de Contato</h2>
            <form action="/contacts/{{ $id }}" method="POST">
                @method('DELETE')
                <p>Tem certeza que deseja excluir <b>{{ $nome }}</b>?</p>
                <input class="btn btn_excluir" type="submit" value="Sim / Excluir" />
                <a href="/contacts">Não / Voltar</a>
                @csrf
            </form>
        @include('footer')