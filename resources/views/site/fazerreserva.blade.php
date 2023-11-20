<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('inserirreserva.index',[$cal->id,$usu->nome] )}}" method="POST">
    @method('put')
    @csrf()  
   <select name="titulocomida">
        @foreach($food as $food)
            <option  name="titulocomida" value={{$food->titulo}}> {{$food->titulo}}</option>
        @endforeach
        <input class="botao" name="numeroconvidados" placeholder="número de convidados">
        <input class="botao" name="nomeaniversariante" placeholder="nome do aniversariante">
        <input class="botao" name="idadeaniversariante" placeholder="idade do aniversariante">
        <input type="hidden" value={{$usu->nome}} name="login">
        <button type="submit">Enviar</button>
   </select>
</form>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #2B1F31;
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh; /* Ocupa a altura total da viewport */
    }

    h1 {
        background: #6341B4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12vh;
        font-family: 'Fredoka One', cursive;
        color: white;
        width: 100%; /* Ocupa a largura total da tela */
        position: fixed;
        top: 0;
        left: 0;
        border-radius: 0 0 10px 10px; /* Adiciona bordas arredondadas apenas na parte inferior */
    }

    form {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .botao {
        margin-top: 10px;
        width: fit-content;
        min-width: 100%;
        border-radius: 5px; /* Adiciona bordas arredondadas */
    }

    .input-container {
        margin-bottom: 10px;
        width: 100%;
    }

    input, select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px; /* Adiciona bordas arredondadas */
    }

    button {
        background-color: #4CAF50;
        color: #000;
        font-size: 16px;
        border-radius: 5px; /* Adiciona bordas arredondadas */
        transition: background-color 0.3s ease;
        padding: 10px;
        cursor: pointer;
    }