<!-- Enviar o arquivo em método sempre post, se não for post o aquivo se transforma em bits na url. o post envia no corpo da requisição -->

<!-- 
Quando é arquivo também tem que ter o enctype  para poder enviar os arquivos. -->

<form action="recebendo.php" method="POST" enctype="multipart/form-data">
   <h1>ENVIO DE ARQUIVO:</h1>

   <label >
      <br>
      <input type="file"name="arquivo">
      <button>Adicionar</button>
   </label>
   
</form>



