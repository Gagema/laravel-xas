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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #2B1F31;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Ocupa a altura total da viewport */
        }

        h1 {
            
            background: #6341B4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 12vh;
            font-family: 'Fredoka One', cursive;
            color: white;
            width: 100%; /* Ocupa a largura total da tela */
            position: fixed;
            top: 0;
            left: 0;
            border-radius: 0 0 10px 10px; /* Adiciona bordas arredondadas apenas na parte inferior */
        }

        #numero {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        #inserir {
            text-align: center;
            margin-bottom: 20px;
        }

        .wrapper {
            
            width: 80%;
            display: flex;
            flex-direction: column;
           
            align-items: center;
           
        }
      

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: #000;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            padding: 10px;
            cursor: pointer;
        }