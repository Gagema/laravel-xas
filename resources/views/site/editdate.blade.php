<h1>FÁBRICA DE SORRISOS</h1>
<form action="{{route('editaragenda.index', $form->id)}}" method="POST">
    @csrf()  
    @method('put')
    <input class="timedate" type="date" placeholder="data" name="data">
    <input class="timedate" type="time" placeholder="hora" name="hora_inicial">
    <span>até</span>
    <input class="timedate" type="time" name="hora_final">
    <button type="submit">Enviar</button>
</form>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: #2B1F31;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h1 {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #6341B4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 12vh;
    font-family: 'Fredoka One', cursive;
    color: white;
    margin: 0;
    }
    
form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.timedate {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

.timedate-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

span {
    text-align: center;
    font-weight: bold;
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