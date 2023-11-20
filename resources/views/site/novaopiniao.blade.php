<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('novaopiniao.index')}}" method="POST">
    @csrf()

    <input type="hidden" name="nome_aniversariante" value={{$res->nomeaniversariante}}>
    <select name="resultado">
            <option  value="Muito bom"> Muito bom</option>
            <option  value="Bom"> Bom</option>
            <option  value="Regular"> Regular</option>
            <option  value="Ruim"> Ruim</option>
            <option  value="Muito Ruim">Muito Ruim</option>
    </select>
    <textarea name="justifique" rows="5" cols="33" placeholder="justifique"></textarea>
    <button type="submit">Enviar</button>
</form>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #2B1F31;
        font-family: Arial, sans-serif;
    }

    h1 {
        background: #6341B4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 12vh;
        font-family: 'Fredoka One', cursive;
        color: white;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    select, textarea {
        margin: 10px 0;
        padding: 10px;
        width: 300px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: white; /* Cor de fundo das caixas de entrada */
    }

    button {
        background-color: #C4FF10;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }