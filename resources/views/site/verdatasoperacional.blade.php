<h1>FÁBRICA DE SORRISOS</h1>
<table id="myTable" width="100%" border="1px">
    <thread>
      <th>data</th>
      <th>horário de início</th>
      <th>horario de fim</th>
      <th>Nome do aniversariante</th>
      <th>Pacote de comida</th>
      
    </thread>
    <tbody>
        
        @foreach($res as $res)
        <tr >
        <td>{{$res->data}}</td>
        <td>{{$res->hora_inicial}}</td>
        <td>{{$res->hora_final}}</td>
        <td>{{$res->nomeaniversariante}}</td>
        <td>{{$res->titulocomida}}</td>
        </tr>
        @endforeach
        
      
    </tbody>
  </table>
  <script>
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
      
        while (switching) {
          
          switching = false;
          rows = table.rows;
        
          for (i = 1; i < (rows.length - 1); i++) {
            
            shouldSwitch = false;
           
            x = rows[i].getElementsByTagName("TD")[0];
            y = rows[i + 1].getElementsByTagName("TD")[0];
            x1= rows[i].getElementsByTagName("TD")[1];
            y1= rows[i+1].getElementsByTagName("TD")[1];
            
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase() ) {
            
              shouldSwitch = true;
              break;
            }
            if( x.innerHTML.toLowerCase() == y.innerHTML.toLowerCase() && x1.innerHTML.toLowerCase() > y1.innerHTML.toLowerCase()){
                shouldSwitch = true;
              break;
            }
          }
          if (shouldSwitch) {
            
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
          }
        }
      
  </script>

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
