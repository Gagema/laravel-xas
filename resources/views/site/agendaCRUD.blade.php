<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('novaagenda.index')}}" method="POST">
    @csrf()
    <input type="hidden" value="Agenda" name="Agenda">
    <button type="submit"> Novo Horário</button>
</form>
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
            <td><a href="{{route('editdate.index',$forms->id)}}">Editar</a></td>
            <td><a href="{{route('delete.index',$forms->id)}}">Delete</a>
            </td>
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
        font-family: Arial, sans-serif;
        margin: 0px;
        background: #2B1F31;
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
    }

    th {
        background-color: #f2f2f2;
    }

    tr {
        background-color: white;
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

    a {
        text-decoration: none;
        color: #3498db;
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
</style>