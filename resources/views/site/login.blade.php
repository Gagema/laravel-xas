<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('fazerlogin.index')}}" method="POST">
    @csrf()
    <input class="botao" id="login" type="text" placeholder="nome" name="nome">
    <input class="botao" id="senha" type="password" placeholder="senha" name="senha">
    <button class="botao2" type="submit">Fazer login</button>
</form>
<a class="botao3" href="{{route('cadastro.index')}}">Cadastrar-se</a>

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
        background-color: #fff; /* Cor de fundo */
        color: #000; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
    }

    .botao2 {
        display: inline-block; /* Transforma o link em um elemento de bloco */
        padding: 10px 20px; /* Adapte o preenchimento conforme necessário */
        text-decoration: none; /* Remove o sublinhado padrão dos links */
        background-color: #C4FF10; /* Cor de fundo */
        color: #000; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
        position: absolute;
        left: 800px;
        top: 250px;
    }

    .botao3 {
        display: inline-block; /* Transforma o link em um elemento de bloco */
        padding: 10px 20px; /* Adapte o preenchimento conforme necessário */
        text-decoration: none; /* Remove o sublinhado padrão dos links */
        background-color: blue; /* Cor de fundo */
        color: #FFF; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
        position: absolute;
        left: 550px;
        top: 325px;
        width: 310px;
        text-align: center;
    }

    #login {
        position: absolute;
        left: 550px;
        top: 225px;
    }

    #senha {
        position: absolute;
        left: 550px;
        top: 275px;
    }