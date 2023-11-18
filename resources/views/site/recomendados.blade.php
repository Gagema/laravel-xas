<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('novarecomendacao.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="recomendacao" name="recomendacao">
    <button type="submit"> Nova Recomendação</button>
</form>
<table width="100%" border="1px">
  <thread>
    <th>recomendações</th>
    
  </thread>
  <tbody>
       
        @foreach($recomend as $recomend)
          
           <tr>
           <td>{{$recomend->recomendacoes}}</td>
           <td><a href="{{route('updaterecomendados.index',$recomend->id)}}">Editar</a>
            <td><a href="{{route('deleterecomendados.index',$recomend->id)}}">Delete</a>
           
           </tr>
           
        @endforeach
</tbody>

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

        button {
        background-color: #C4FF10;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }