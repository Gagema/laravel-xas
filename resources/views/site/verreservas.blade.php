<h1>RESERVAS</h1>
<table width="100%" border="1px">
  <thread>
    <th>data</th>
    <th>hora inicial</th>
    <th>hora final</th>
    <th>Titulo do pacote de comidas</th>
    <th>Numero de convidados</th>
    <th>nome do aniversariante</th>
    <th> idade do anivesariante</th>
    <th>situação</th>
  </thread>
  <tbody>
        @foreach($res as $res)
           <tr>
           <td>{{$res->data}}</td>
            <td> {{$res->hora_inicial}} </td>
            <td> {{$res->hora_final}} </td>
            <td>{{$res->titulocomida}} </td>
            <td>{{$res->numeroconvidados}}</td>
            <td>{{$res->nomeaniversariante}}</td>
            <td>{{$res->idadeaniversariante}}</td>
            <td id="status{{$res->id}}">{{$res->status}}</td>
            <td id="cancelar{{$res->id}}">{{$res->status}}</td>
           </tr>
           <script>
             var element=document.getElementById("status{{$res->id}}");
             var element2=document.getElementById("cancelar{{$res->id}}");
             
             
              if(element.innerText=="pendente"){
                 element.innerHTML='pendente';
                 element2.innerHTML='';
              }
              if(element.innerText=="aprovado"){
                 element.innerHTML='<a href="{{route('prefesta.index', $res->id)}}">Ir para a festa</a>';
                 element2.innerHTML='';

              }
              if(element.innerText=="negado"){
                 element.innerHTML='negado';
                 element2.innerHTML='';
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
