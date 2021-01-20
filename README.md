# Agenda Telefônica
Projeto desenvolvido para processo seletivo na vaga de desenvolvimento web para JN Moura.<br>
Este projeto tem como objetivo cadastrar contatos em um banco de dados MySQL informando:
- Nome
- Email
- Telefone residêncial
- Celular
- Endereço (rua, número, bairro)
- Cidade
- Unidade Federativa (UF)
- CEP
- Observações

## Tecnologias utilizadas
- HTML
- CSS
- JavaScript (com jQuery)
- PHP
- [DataTables](https://datatables.net/)
- [Input Mask](https://github.com/RobinHerbots/Inputmask)
- API WhatsApp para o chat de conversas

## Requisitos
- [XAMPP Control Panel](https://www.apachefriends.org/index.html)

## Instalação
Após instalar o XAMPP, clone o repositório na pasta `htdocs` dentro da pasta do XAMPP. Feito isso, 
abra o `xampp-control.exe` e inicie os serviços **Apache** e **MySQL**.
<br>
> Caso tenha problemas com a inicialização do Apache, veja [este artigo](https://terminaldeinformacao.com/2018/12/12/como-resolver-problema-da-porta-80-ao-subir-apache-xampp-windows-10/) sobre como corrigir o erro da porta 80.

<br>

Abra o navegador e digite `localhost/phpmyadmin`. Clique na aba `Import`, clique em `Choose File` e selecione o arquivo `AgendaTelefonica.sql` 
na pasta `db/` dentro da pasta da aplicação. Clique em `Go` e o banco de dados será criado. No navegador, digite `localhost` e clique na pasta da aplicação para executar.
