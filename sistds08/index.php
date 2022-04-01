<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
    <center><h3>SisArray - TDS08</h3></center>
    <hr/>
    <br/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                </svg>&nbsp;&nbsp;<b>Cadastro de Pessoas</b></h4>
          </div>
          <div class="card-body text-start">
          <form action="index.php" method="POST">
            <label class="form-label"> Nome</label><br/>
            <input type= "text" class="form-control" name="nome" placeholder= "Digite seu nome..." required/><br/>
            <label class="form-label"> Idade</label><br/>
            <input type= "number" name="idade" class="form-control" placeholder= "Digite sua idade..."required/><br/>
            <button type="submit" class="btn btn-secondary" name="btgravar">Gravar</button>
        </form>
          </div>
        </div>
      </div>
    </div>
   </div>
   <br/>

   <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cloud-haze2" viewBox="0 0 16 16">
  <path d="M8.5 3a4.002 4.002 0 0 0-3.8 2.745.5.5 0 1 1-.949-.313 5.002 5.002 0 0 1 9.654.595A3 3 0 0 1 13 12H4.5a.5.5 0 0 1 0-1H13a2 2 0 0 0 .001-4h-.026a.5.5 0 0 1-.5-.445A4 4 0 0 0 8.5 3zM0 7.5A.5.5 0 0 1 .5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm2 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-2 4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
</svg>&nbsp;<b>Dados das Pessoas</b></h4>
          </div>
          <div class="card-body text-start">
            corpo da div
          </div>
        </div>
      </div>
    </div>
   </div>
    

<?php
    if(isset($_POST['btgravar'])){
        $nome= $_POST['nome'];
        $idade= $_POST['idade'];
        $arquivo = 'dados.txt';//dados.txt criado na pasta SISTDS08
        $texto = $nome.";".$idade.";"; // (\n) para pular a linha
        $file = fopen($arquivo, 'a');//foper abri um arquivo ou url, 'a' ao final o curso continua no fim
        fwrite($file, $texto); //transcrever o 'texto' dentro 'file(arquivo)' que foi aberto
        fclose($file);//fechar o arquivo file que foi aberto
    } else {
        echo "";
    }
        $arquivo = fopen("dados.txt","r");// (r) curso no inicio do texto
        while(!feof($arquivo)){//feof ler o arquivo até o final
            $linha = fgets($arquivo); // ler até o final e salva o que foi lido(na variavel linha)
        }
        $dados = explode(";",$linha); //retira algo que vc deseja retirar
        fclose($arquivo);
        echo"<br/><br/>";
        $conta = count($dados)-2;
        
        for($i=0;$i<=$conta;$i++){
            echo "Nome: ".$dados[$i].'<br/>';
            $i++;
            echo "Idade: ".$dados[$i].'<br/>';
        }

?>

</body>
</html>