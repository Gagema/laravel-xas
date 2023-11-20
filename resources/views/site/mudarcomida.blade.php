<h1>FÁBRICA DE SORRISOS</h1>
<table width="100%" border="1px">
    <thread>
      <th>TITULO</th>
      <th>diferença de preço</th>
      
    </thread>
    <tbody>
          @foreach($data2 as $data2)
              <?php
              $a=$data1->preço;
              $b=$data2->preço;
              $c=$a-$b?>
             <tr>
              <td id="titulo{{$data2->id}}">{{$data2->titulo}}</td>
              <td id="preço{{$data2->id}}" > <?php echo ($c)?></td>
              <td id="link{{$data2->id}}"><a href="{{route('alterarcomida.index',[$data3->id,$data2->titulo] )}}">mudar</a>

             </td>
              </td>
              </tr>
              <script>
                var element=document.getElementById("preço{{$data2->id}}");
                var element2=document.getElementById("titulo{{$data2->id}}");
                var element3=document.getElementById("link{{$data2->id}}");
                 if(element.innerText==0){
                    element.innerHTML='';
                    element2.innerHTML='';
                    element3.innerHTML='';
                 }
                 if(element.innerText<0){
                    element.innerHTML='<?php $d= -$c?> <p><?php echo($d)?> reais a pagar</p>';
                    
                 }
                 if(element.innerText>0){
                    element.innerHTML='<p><?php echo($c)?> reais a receber</p>';
                    
                 }
               </script>
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
            background-color: white; /* Adiciona o fundo branco */
        }

        th {
            color: black;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        
