<h1>FÁBRICA DE SORRISOS</h1>
<table width="100%" border="1px">
  <thread>
    <th>Data</th>
    <th>Hora de início</th>
    <th>Hora de término</th>
  </thread>
  <tbody>
        @foreach($forms as $forms)
           <tr>
            <td>{{$forms->data}}</td>
            <td>{{$forms->hora_inicial}}</td>
            <td>{{$forms->hora_final}}</td>
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
            background-color: white; /* Adiciona o fundo branco */
        }

        th {
            color: black;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
