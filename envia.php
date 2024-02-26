<?php

   $nome = addslashes($_POST['nome']);
   $email = addslashes($_POST['email']);
   $telefone = addslashes($_POST['telefone']);
   $texto = addslashes($_POST['texto']);

   $para = "va97843@gmail.com";
   $contato = "entrar em contato - VNS";

   $corpo = "Nome:" .$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Texto ".$texto;

   $cabeca = "From: va97843@gmail.com"."\n"."Reply-to: ".$email"\n"."X=<Mailer:PHP/".phpversion();

   if(mail($para,$contato,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
   }else{
    echo("Houve um erro ao enviar o email!");
   }

?>