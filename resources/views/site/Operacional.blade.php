<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('reservasoperacional.index')}}" method="POST">
    @csrf()
    <input type="hidden" name="reservas" value="reservas">
    <button id="reserv" type="submit" name="reservas1">Ver convidados da festa</button>
</form>
<form action="{{route('datasoperacional.index')}}" method="POST">
    @csrf()
    <input type="hidden" name="datas" value="datas">
    <button id="data" type="submit" name="datas1">Ver próximas reservas</button>
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

    #reserv {
        position: absolute;
        left: 500px;
        top: 300px;
    }

    #data {
        position: absolute;
        left: 800px;
        top: 300px;
    }