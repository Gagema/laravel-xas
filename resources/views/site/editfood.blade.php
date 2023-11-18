<h1>FÁBRICA DE SORRISOS</h1>
<h2>Data {{$form->id}}</h2>
<form action="{{route('editarfood.index', $form->id)}}" method="POST" enctype="multipart/form-data">
    @csrf()  
    @method('put')
    <input type="file" name="Foto1">
    <input type="file" name="Foto2">
    <input type="file" name="Foto3">
    <input type="text" name="titulo" plachegolder="Título do pacote">
    <input type="number" name="preço" placeholder="preço do pacote">
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
    h1 {
        background: #6341B4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12vh;
        font-family: 'Fredoka One', cursive;
        color: white;
    }