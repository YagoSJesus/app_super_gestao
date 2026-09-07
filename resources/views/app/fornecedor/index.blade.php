<h3>Fornecedores</h3>

<br><br>
@isset($fornecedores)
Fornecedor: {{ $fornecedores[0]['nome'] }} <br>
Status: {{ $fornecedores[0]['status'] }} <br>
CNPJ: {{ $fornecedores[0]['cnpj'] }} <br>
<br><br><br><br>
Fornecedor: {{ $fornecedores[1]['nome'] }} <br>
Status: {{ $fornecedores[1]['status'] }} <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
        @empty($fornecedores[1]['cnpj'])
            Não informado
        @endempty
    @endisset
@endisset
