# HelpDesk

:black_circle: Aplicação de suporte a usuários para solução de problemas com equipamentos eletrônicos

:black_circle: Feito totalmente em php

:black_circle: Maior desafio na construção da aplicação foi a recuperação dos chamados abertos

## Execucao

:black_circle: Para executar a aplicação é necessário apenas "php -S localhost:porta"

## Sobre o funcionamento

:black_circle: A aplicação inicia com um pequeno login, onde usuários e senhas de exemplo estão localizados em valida_login.php, que leva a home onde é possível abrir ou consultar chamados

:black_circle: Chamados abertos são enviados para registra_chamado.php onde é feita a construção do chamado em frase (utilizando str_replace() previno a repetição do sinal de separação da frase) e envio para arquivo.hd

:black_circle: Para recuperar os chamados é necessário um loop em arquivo.hd a cada final de linha (chamado), leitura de cada linha é atribuída a uma variável que logo depois foi atribuída a um array. Utilizando esse array é possível recuperar cada campo preenchido e exibi-los por meio de um loop
