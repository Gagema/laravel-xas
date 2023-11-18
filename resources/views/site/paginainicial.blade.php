<h1>FÁBRICA DE SORRISOS</h1>

<a class="botao" id="login" href="{{route('login.index')}}">LOGIN</a>
<a class="botao" id="agenda" href="{{route('agenda.index')}}">AGENDA</a>

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
        background-color: #4CAF50; /* Cor de fundo */
        color: #fff; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
    }

    #login {
        position: absolute;
        left: 700px;
        top: 500px;
    }

    #agenda {
        position: absolute;
        left: 1000px;
        top: 500px;
    }