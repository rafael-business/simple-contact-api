        @include('header')
            @include('menu')
            <h2>Novo Contato</h2>
            <form action="/contacts" method="POST">
                <div class="field">
                    <label for="nome">Nome</label>
                    <input type="text" maxlength="45" name="nome" />
                </div>
                <div class="field">
                    <label for="email">E-mail</label>
                    <input type="text" maxlength="90" name="email" />
                </div>
                <div class="field">
                    <label for="telefone">Telefone</label>
                    <input type="text" maxlength="15" name="telefone" />
                </div>
                <input class="btn btn_salvar" type="submit" value="Enviar" />
                @csrf
            </form>
        @include('footer')