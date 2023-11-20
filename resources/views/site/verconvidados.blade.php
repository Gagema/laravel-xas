<h1>FÁBRICA DE SORRISOS</h1>
<table width="100%" border="1px">
  <thread>
    <th>nome</th>
    <th>CPF</th>
    <th>idade</th>
  </thread>
  <tbody>
        @foreach($cos as $cos)
           <tr>
            <td>{{$cos->nome_convidado}}</td>
            <td>{{$cos->CPF}}</td>
            <td>{{$cos->idade}}</td>
            <td><a href="{{route('deleteconvidado.index',[$cos->id,$cos->id_festa])}}">Bloquear</a>
           </tr>
        @endforeach
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