<h1>FÁBRICA DE SORRISOS</h1>
<br>
<a class="botao" id="novoconv" href="{{route('convidados.index', $res->id )}}">Novo convidado</a>
</br>
<br>
<p>Link para convidados: localhost:8989/festa/convidados/{{$res->id}}</p>
</br>
<br>
<form action="{{route('verconvidados.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="convidado" name="convidado">
    <button class="botao" id="vconv" type="submit"> ver convidados</button>
</form>
</br>
</br>
<br>
<form action="{{route('verpacotedecomida.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="pacotedecomida" name="pacotedecomida">
    <button class="botao" id="vcomida" type="submit"> Ver pacote de comida escolhido</button>
</form>
</br>
<form action="{{route('cancelarreserva.index', $res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="cancelarreserva" name="cancelarreserva">
    <button class="botao" id="cancelar" type="submit"> Cancelar</button>
</form>
</br>
<br>
<form action="{{route('verrecomendados.index' )}}" method="POST">
    @csrf()
    <input type="hidden" value="recomendados" name="recomendados">
    <button class="botao" id="vrecom" type="submit"> Ver recomendados</button>
</form>
<form action="{{route('opiniao.index',$res->id )}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="opiniao" name="opiniao">
    <button class="botao" id="opiniao" type="submit"> Dê sua opinião</button>
</form>
</br>

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
    .botao {
        display: inline-block; /* Transforma o link em um elemento de bloco */
        padding: 10px 20px; /* Adapte o preenchimento conforme necessário */
        text-decoration: none; /* Remove o sublinhado padrão dos links */
        background-color: #C4FF10; /* Cor de fundo */
        color: #000; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
    }

    p {
        display: inline-block; /* Transforma o link em um elemento de bloco */
        padding: 10px 20px; /* Adapte o preenchimento conforme necessário */
        text-decoration: none; /* Remove o sublinhado padrão dos links */
        background-color: blue; /* Cor de fundo */
        color: #FFF; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
    }

    #novoconv {
        position: absolute;
        left: 190px;
        top: 150px;
    }

    #vconv {
        position: absolute;
        left: 650px;
        top: 150px;
    }

    #vcomida {
        position: absolute;
        left: 1150px;
        top: 150px;
    }

    #cancelar {
        position: absolute;
        left: 190px;
        top: 400px;
    }

    #vrecom {
        position: absolute;
        left: 650px;
        top: 400px;
    }

    #opiniao {
        position: absolute;
        left: 1150px;
        top: 400px;
    }

    p {
        position: absolute;
        left: 550px;
        top: 650px;
    }