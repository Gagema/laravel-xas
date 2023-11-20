<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('novafood.index')}}" method="POST">
  @csrf()
  <input type="hidden" value="food" name="food">
  <button type="submit"> Nova Comida</button>
</form>
<table width=200 height=100 border="1px">
  <thread>
    <th>TITULO</th>
    <th>Foto1</th>
    <th>Foto2</th>
    <th>Foto3</th>
    <th>Preço</th>
    <th>Lista de comidas</th>
    <th>Lista de bebidas</th>
    
  </thread>
  <tbody>
        @foreach($forms as $forms)
            <?php
            $a=$forms->lista_comidas;
            $b=$forms->lista_bebidas;?>
           <tr>
            <td>{{$forms->titulo}}</td>
            <td> <img src="{{url("storage/{$forms->Foto1} ")}}" widht=200 height=100 /> </td>
            <td> <img src="{{url("storage/{$forms->Foto2} ")}}" widht=200 height=100 /> </td>
            <td> <img src="{{url("storage/{$forms->Foto3} ")}}" widht=200 height=100 /> </td>
            <td>{{$forms->preço}}</td>
            <td><?php echo($a)?></td>
            <td><?php echo ($b)?></td>
            
            <td><a href="{{route('editfood.index',$forms->id)}}">Editar</a></td>
            <td><a href="{{route('deletefood.index',$forms->id)}}">Delete</a>
            </td>
            </tr>
            
        @endforeach
  </tbody>
</table>

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

    form {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr {
        background-color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    
    button {
        background-color: #C4FF10;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }