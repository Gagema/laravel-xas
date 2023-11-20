<h1>FÁBRICA DE SORRISOS</h1>
<input id="numero" type="number" placeholder="Insira a quantidade de convidados" value="0">
<p id="inserir"></p>

<form action="{{route('novosconvidados.index', $res->id )}}" method="POST" class="fixar">
    @method('put')
    @csrf()
   <div class="wrapper">
    

    </div>
    <button type="submit"> Enviar</button>
</form>
<script>
    var number= document.getElementById("numero");
    var insere= document.getElementById("inserir");
    var $wrapper=document.querySelector('.wrapper');
    number.addEventListener('input',()=>{
    if (event.currentTarget!=event.originalTarget){
    $wrapper.innerHTML='';
    for(var i=0;i<number.value;i++){
    HTMLTemporario = $wrapper.innerHTML;
    
    HTMLNovo = '<br> <input type="hidden" value="{{$res->id}}" name="id_festa[]"> <input type="text" name="CPF[]" placeholder="CPF"> <input type="text" name="idade[]" placeholder="idade"> <input type="text" name="nome_convidado[]" placeholder="nome do convidado"> </br>';
    HTMLTemporario = HTMLNovo + HTMLTemporario;
    $wrapper.innerHTML = HTMLTemporario;
    }}});
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

    button {
        background-color: #C4FF10;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
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

        #numero {
        background-color: white;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }