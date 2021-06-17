        @include('header')
            @include('menu')
            <h2>Lista de Contatos</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>
                            {{ $contact->nome }}<br />
                            <a href="/contacts/{{ $contact->id }}">Ver</a> | 
                            <a href="/contacts/{{ $contact->id }}/edit">Editar</a> | 
                            <a href="/contacts/{{ $contact->id }}/delete" data-id="{{ $contact->id }}">Excluir</a>
                        </td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->telefone }}</td>
                    </tr>
                @empty
                    <tr colspan="3"><td>Nenhum contato encontrado!</td></tr>
                @endforelse
                </tbody>
            </table>
        @include('footer')