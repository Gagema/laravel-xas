<h1>FÁBRICA DE SORRISOS</h1>
<h2>Data {{$form->id}}</h2>
<form action="{{route('editarfood.index', $form->id)}}" method="POST" enctype="multipart/form-data">
    @csrf()  
    @method('put')
    <input class="botao" type="file" name="Foto1">
    <input class="botao" type="file" name="Foto2">
    <input class="botao" type="file" name="Foto3">
    <input class="botao" type="text" name="titulo" placeholder="Título do pacote">
    <input class="botao" type="number" name="preço" placeholder="Preço do pacote">
    <div id="lista de comidas">
    <p> Insira a lista de comidas</p>
    <textarea id="editor" name="lista_comidas"></textarea>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    </div>
    <div id="lista de bebidas"> 
    <p> Insira a lista de bebidas</p>
    <textarea id="editor1" name="lista_bebidas" ></textarea>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    </div>
    
    <button type="submit" name="Agenda">Enviar</button>
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
        background-color: #fff; /* Cor de fundo */
        color: #000; /* Cor do texto */
        font-size: 16px; /* Tamanho da fonte */
        border-radius: 5px; /* Borda arredondada */
        transition: background-color 0.3s ease; /* Transição suave na mudança de cor de fundo */
    }

    p {
        color: white;
    }

    h2 {
        color: white;
    }