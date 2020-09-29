<?php
  //header('Content-Type: text/html; charset=utf-8');

  $idConexao = mysqli_connect('localhost', 'root', '') or die('Falha na conexão.');

  if($idConexao)
  {
     mysqli_select_db($idConexao,'memesalva') or die('Falha na seleção do banco.');
    
     //mysqli_query($idConexao,"SET NAMES 'utf8'");
     //mysqli_query($idConexao,'SET character_set_connection=utf8');
     //mysqli_query($idConexao,'SET character_set_client=utf8');
     //mysqli_query($idConexao,'SET character_set_results=utf8');	
	
     $Comando = 'SELECT P.id, P.descricao, P.imagem, U.nome FROM post P, usuario U'.
                ' where P.autor = U.id ORDER BY P.id';
     $Resultado = mysqli_query($idConexao,$Comando) or die('Comando SQL não executado.');
    
     echo 'Listagem de Memes: <br>';
     
     while($Registro = mysqli_fetch_array($Resultado))
     { echo '<article> <header> <h2> Meme '.$Registro['id'].' </h2> </header>'.
            '<img src="'.$Registro['imagem'].'" />'.
			'<p>'.$Registro['descricao'].'</p>'. 
			'<p> Autor: '.$Registro['nome'].'</p>'.
            '</article>';
     }    

     mysqli_close($idConexao) or die('Falha no fechamento da conexão.');      
  }
  else
  { Echo 'Erro na conexão com o servidor do banco.';
  }

?>