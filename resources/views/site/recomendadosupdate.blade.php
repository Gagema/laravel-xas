<h1>FÁBRICA DE SORRISOS</h1>

<form action="{{route('atualizarrecomendacao.index',$recomend->id)}}" method="POST">
@method('put')
@csrf()
<textarea class="botao" name="recomendacoes" rows="5" cols="33" placeholder="Insira a recomendação"></textarea>
<button type="submit">Enviar</button>
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
    .botao {
        display: inline-block; /* Transforma o link em um elemento de bloco */
        padding: 10px 20px; /* Adapte o preenchimento conforme necessário */
        text-decoration: none; /* Remove o sublinhado padrão dos links */
        background-color: white; /* Cor de fundo */
        color: #000; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
    }
    
    button {
        background-color: #C4FF10;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }