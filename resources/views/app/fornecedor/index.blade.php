<h3>Fornecedores</h3>
<br><br>
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h4>Existem alguns fornecedores cadastrados</h4>
@elseif(count($fornecedores) > 10)
    <h4>Existem vários fornecedores cadastrados</h4>
@else
    <h4>Ainda não existem fornecedores cadastrados</h4>
@endif
<br><br>
Fornecedor: {{ $fornecedores[0]['nome'] }} <br>
Status: {{ $fornecedores[0]['status'] }} <br>
<br><br>
@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo - Condição com IF, operador de negação (!)
@endif
<br><br>
@unless($fornecedores[0]['status'] == 'S') {{-- Se o retorno da condição for false --}}
    Fornecedor inativo - Condição com UNLESS, operador de negação (!)
@endunless
