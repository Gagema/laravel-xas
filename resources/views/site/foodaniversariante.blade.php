<table width=200 height=100 border="1px">
  <thread>
    <th>TITULO</th>
    <th>fotos</th>
    
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
            <td><?php echo($a)?></td>
            <td><?php echo ($b)?></td>
            <td>{{$forms->preço}}</td>
            </td>
            </tr>
            
        @endforeach
  </tbody>
</table>
