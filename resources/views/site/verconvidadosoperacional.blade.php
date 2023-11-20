<h1>FÁBRICA DE SORRISOS</h1>
<table width="100%" border="1px">
    <thread>
      <th>nome</th>
      <th>CPF</th>
      <th>idade</th>
    </thread>
    <tbody>
        <script>
            var confirmados=0;
            var presentes=0;
        </script>
        <form action="{{route('novoconvidadooperacional.index', $res->id )}}" method="POST">
            @method('put')
            @csrf()
            <input type="hidden" value="convidado" name="convidado">
            <button type="submit"> novos convidados</button>
        </form>
        <p id="confirmados"></p>
        <p id="presentes"></p>
        <p>Pacote de comidas:{{$res->titulocomida}}</p>
          @foreach($cos as $cos)
          
             <tr>
              <td>{{$cos->nome_convidado}}</td>
              <td>{{$cos->CPF}}</td>
              <td>{{$cos->idade}}</td>
              <td id="presenca{{$cos->id}}">{{$cos->status}}</td>
              
             </tr>
             <script>
                var element=document.getElementById("presenca{{$cos->id}}");
                var element2=document.getElementById("confirmados");
                var element3=document.getElementById("presentes");
              
                confirmados=confirmados+1;
                
                 if(element.innerText=="confirmado"){
                    element.innerHTML='<a href="{{route('aprovarconvidado.index',[$cos->id,$cos->id_festa])}}">Confirmar presença</a>';
                    
                 }
                 if(element.innerText=="presente"){
                    element.innerHTML='presente';
                    presentes=presentes+1;

                 }
                HTMLPRESENTE='presentes:';
                HTMLCONFIRMADO='confirmados:';
                element2.innerHTML=HTMLCONFIRMADO+confirmados;
                element3.innerHTML=HTMLPRESENTE+presentes;
    
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

        p {
          color: white;
        }

        button {
        background-color: #C4FF10;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }