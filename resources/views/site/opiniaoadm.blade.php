<h1>ADMINISTRAÇÃO</h1>
<table width="100%" border="1px">
    <thread>
      <th>Nome do Aniversariante</th>
      <th>Resultado da pesquisa        </th>
      <th> Justificativa</th>
      
    </thread>
    <tbody>
          @foreach($op as $op)
             
             <tr>
              <td>{{$op->nome_aniversariante}}</td>
              <td>{{$op->resultado}}</td>
              <td>{{$op->justifique}}</td>
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
