# test-tray

Teste de crud no formato API
Arquivo \dump\test_tray.sql deve ser importado no Mysql ou apenas copiar o código sql nele para
geração do banco de teste.

1 - entrar em \htdocs ou \www, e clonar o projeto

exemplo: http://localhost/test_tray/

Atenção!!!
renomear arquivo env.example.php para env.php e inserir o host conforme exemplo acima,
utilizar este mesmo host no arquivo env.php

alterar o email padrão para recebimento do relatório.


cron job para enviar os emails de vendas
59 23 * * * php -f /home/u844214382/cronjobs/nomedoarquivo.php


