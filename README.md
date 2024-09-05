🚀 Projeto de Simulação de Phishing Futurista
📂 Estrutura e Tecnologias
Este projeto tem como objetivo simular uma página de login com um estilo futurista, repleto de interatividade e efeitos visuais. Ele foi desenvolvido com as seguintes tecnologias:

HTML5: para estruturar a página e o formulário de registro.
CSS3: para estilizar e criar efeitos dinâmicos e futuristas, com foco em uma estética hacker/cyberpunk.
JavaScript (Vanilla): para adicionar interatividade, como o efeito de explosão ao clicar no botão de registrar.
PHP: para capturar e armazenar os dados dos usuários, como nome de usuário, senha, IP e agente do navegador.
Shell (Linux): para configurar o ambiente de servidor e monitorar os dados capturados em tempo real.
💻 Acesse o Projeto
Clique aqui para acessar a página do projeto!

Você verá uma interface de criação de conta interativa e estilizada. Ao preencher o formulário e clicar em "Registrar", o botão irá desaparecer em uma "explosão digital" e uma mensagem confirmará o sucesso da ação.

🛠️ Funcionalidades do Projeto
Formulário de Registro Interativo:

Coleta informações como nome de usuário, senha e confirmação de senha.
O botão "Registrar" explode ao ser clicado, criando uma experiência visual única.
Mensagem de confirmação exibida após a explosão, indicando sucesso no registro.
Captação de Dados do Usuário:

Coleta do endereço IP do usuário que acessa a página.
Captura do User-Agent, que fornece informações sobre o navegador e sistema operacional utilizado.
Efeitos Visuais e Interativos:

Botões estilizados com efeitos de hover e animações de clique.
Feedback visual com pop-ups estilizados após o envio do formulário.
Monitoramento em Tempo Real:

Os dados inseridos são armazenados em um arquivo creds.txt no servidor.
O administrador pode monitorar esses dados em tempo real diretamente no terminal Linux.
🧱 Estrutura do Projeto
Aqui está uma visão geral da estrutura de arquivos do projeto:

bash
Copiar código
phishing-simulation/
│
├── index.html            # Página principal com o formulário de registro e interações
├── capture.php           # Script PHP que captura os dados do formulário
├── styles.css            # Folha de estilos que define o visual futurista da página
└── creds.txt             # Arquivo onde os dados dos usuários são armazenados
📋 Descrição dos Arquivos
index.html: Página de login onde o usuário insere suas credenciais. Contém o formulário de registro, e usa JavaScript para interações dinâmicas.
capture.php: Script responsável por capturar e armazenar as credenciais inseridas, bem como o IP e o user-agent do usuário.
styles.css: Folha de estilo que define o visual cyberpunk da página, com cores escuras (preto, verde e vermelho) e efeitos de hover e explosão.
creds.txt: Arquivo gerado automaticamente onde as credenciais dos usuários são registradas.
🌐 Como Funciona?
Aqui está o fluxo completo de como a página interage com o usuário:

O usuário acessa a página principal no link fornecido.

Ele preenche o formulário com nome de usuário, senha e confirmação de senha.

Ao clicar no botão "Registrar", o botão explode com uma animação de escala e opacidade.

Um pop-up futurista aparece informando que o registro foi bem-sucedido.

Os dados são enviados para o arquivo PHP (capture.php), que:

Captura e armazena o nome de usuário, senha, IP e agente do navegador.
Armazena essas informações no arquivo creds.txt.
O administrador pode monitorar em tempo real os dados que estão sendo inseridos via terminal Linux.

🚀 Como Executar o Projeto Localmente
🔧 Pré-requisitos
Para rodar o projeto localmente, você precisará de:

Servidor Apache e PHP: Para hospedar o projeto.
Acesso ao terminal (Linux ou similar): Para monitorar os dados capturados e iniciar o servidor PHP.
Passos para Configurar:
Instalar o Apache:

bash
Copiar código
sudo apt-get install apache2
Iniciar o Servidor Apache:

bash
Copiar código
sudo systemctl start apache2
sudo systemctl enable apache2
Instalar PHP:

bash
Copiar código
sudo apt-get install php
Copiar os Arquivos para o Diretório do Servidor:

bash
Copiar código
sudo cp index.html capture.php styles.css /var/www/html/phishing-simulation/
Navegar até o Diretório do Projeto:

bash
Copiar código
cd /var/www/html/phishing-simulation/
Iniciar o Servidor PHP na Porta 8000:

bash
Copiar código
php -S 0.0.0.0:8000
Acessar o projeto no navegador:

arduino
Copiar código
http://10.0.3.15:8000
🔍 Monitorar os Dados Capturados:
Após iniciar o servidor e os usuários acessarem o site, você pode monitorar as credenciais inseridas em tempo real com o seguinte comando:

bash
Copiar código
sudo tail -f /var/www/html/phishing-simulation/creds.txt
🎨 Estilo Visual
A estética do projeto segue um tema hacker/cyberpunk, com as seguintes características:

Fundo preto para remeter a ambientes de terminal.
Textos verdes e vermelhos, que são cores frequentemente associadas a ambientes de hacking.
Fontes no estilo de terminal, utilizando Courier New para criar uma experiência mais autêntica.
Interatividade e efeitos visuais: Os botões mudam de cor, explodem ao serem clicados, e pop-ups confirmam as ações do usuário.
📜 Licença
Este projeto foi desenvolvido para fins educacionais e de simulação. É livre para ser utilizado, modificado e distribuído para fins educativos e não maliciosos.

