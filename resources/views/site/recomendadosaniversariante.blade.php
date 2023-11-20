<h1>FÁBRICA DE SORRISOS</h1>
<table width="100%" border="1px">
  <thread>
    <th>recomendações</th>
    
  </thread>
  <tbody>
       
        @foreach($recomend as $recomend)
          
           <tr>
           <td>{{$recomend->recomendacoes}}</td>
           
           </tr>
           
        @endforeach
</tbody>

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
            color: black;
            background-color: white; /* Cor de fundo para cabeçalho */
        }

        tr:hover {
            background-color: #f5f5f5;
        }