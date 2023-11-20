<h1>FÁBRICA DE SORRISOS</h1>

<form action="{{route('foodaniversariante.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="food" name="food">
    <button id="cardapio" type="submit" name="food1">Ver pacotes de comida</button>
</form>
<form action="{{route('calendarioreserva.index',$forms->nome)}}" method="POST">
    @method('put')
    @csrf()
    <input type="hidden" value="reserva" name="reserva">
    <button id="reserva" type="submit" name="reserva">Fazer reserva</button>
</form>
<form action="{{route('verreserva.index',$forms->nome )}}" method="POST">
    @method('put')
    @csrf()  
    <input type="hidden" value="verreserva" name="verreserva">
    <button id="vreserva" type="submit" name="verreserva"> Ver reserva</button>
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
        left: 200px;
        top: 300px;
    }

    #reserva {
        position: absolute;
        left: 700px;
        top: 300px;
    }

    #vreserva {
        position: absolute;
        left: 1200px;
        top: 300px;
    }