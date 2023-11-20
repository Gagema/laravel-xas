<h1>FÁBRICA DE SORRISOS</h1>
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
          
              <?php
              $a=$food->lista_comidas;
              $b=$food->lista_bebidas;?>
             <tr>
              <td>{{$food->titulo}}</td>
              <td> <img src="{{url("storage/{$food->Foto1} ")}}" widht=200 height=100 /> </td>
              <td> <img src="{{url("storage/{$food->Foto2} ")}}" widht=200 height=100 /> </td>
              <td> <img src="{{url("storage/{$food->Foto3} ")}}" widht=200 height=100 /> </td>
              <td>{{$food->preço}}</td>
              <td><?php echo($a)?></td>
              <td><?php echo ($b)?></td>
              
              <td><form action="{{route('mudarcomida.index', [$res->id,$food->titulo] )}}" method="POST">
                @method('put')
                @csrf()
                <input type="hidden" value="mudarcomida" name="mudarcomida">
                <button type="submit"> Mudar pacote de comida</button>
            </form></td>
              </td>
              </tr>
    </tbody>
  </table>
  
  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white; /* Adiciona o fundo branco à tabela */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            color: white;
            background-color: #6341B4; /* Cor de fundo para cabeçalho */
        }

        tr:hover {
            background-color: #f5f5f5;
        }