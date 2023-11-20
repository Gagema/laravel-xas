<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('respostasadmin1.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="food" name="food">
    <button id="cardapio" type="submit" name="food1">Cardápio</button>
</form>
<form action="{{route('respostasadmin.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="Agenda" name="NovaAgenda">
    <button id="agenda" type="submit" name="NovaAgenda" value="Agenda">Agenda</button>
</form>
<form action="{{route('respostasadmin2.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="reservas" name="reservas">
    <button id="reservas" type="submit" name="reservas1">Novas reservas</button>
</form>
<form action="{{route('respostasadmin3.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="recomendacoes" name="recomendacoes">
    <button id="recomendacoes" type="submit" name="recomendacoes1">Novas recomendações</button>
</form>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body {
        background: #2B1F31;
    }

    h1 {
        background: #6341B4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12vh;
        font-family: 'Fredoka One', cursive;
        color: white;
    }

    button {
        display: inline-block; /* Transforma o link em um elemento de bloco */
        padding: 10px 20px; /* Adapte o preenchimento conforme necessário */
        text-decoration: none; /* Remove o sublinhado padrão dos links */
        background-color: #C4FF10; /* Cor de fundo */
        color: #000; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
    }

    #cardapio {
        position: absolute;
        left: 400px;
        top: 100px;
    }

    #agenda {
        position: absolute;
        left: 400px;
        top: 400px;
    }

    #reservas {
        position: absolute;
        left: 1000px;
        top: 100px;
    }

    #recomendacoes {
        position: absolute;
        left: 1000px;
        top: 400px;
    }