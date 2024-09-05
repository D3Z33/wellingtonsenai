# 🚀 Projeto de Simulação de Phishing Futurista

## 🛠️ Tecnologias Utilizadas

<div align="center">

  ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
  ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
  ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
  ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
  ![Linux](https://img.shields.io/badge/Linux-FCC624?style=for-the-badge&logo=linux&logoColor=black)

</div>

Este projeto simula uma página de login com um estilo futurista e interativo, onde utilizamos uma combinação de tecnologias para proporcionar uma experiência **cyberpunk/hacker**. Com animações, interatividade e um efeito especial ao clicar no botão de registrar, o projeto captura as credenciais do usuário de maneira intuitiva.

---

## 📂 Estrutura do Projeto

A estrutura do projeto é simples, mas eficiente, permitindo a captura de dados e um layout visual impactante:

```bash
phishing-simulation/
│
├── index.html            # Página principal com o formulário de registro e interações
├── capture.php           # Script PHP que captura os dados do formulário
├── styles.css            # Folha de estilos que define o visual futurista da página
└── creds.txt             # Arquivo onde os dados dos usuários são armazenados
````

## 🛠️ Funcionalidades do Projeto
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

## 🧱 Estrutura do Projeto
Aqui está uma visão geral da estrutura de arquivos do projeto:

```bash
phishing-simulation/
│
├── index.html            # Página principal com o formulário de registro e interações
├── capture.php           # Script PHP que captura os dados do formulário
├── styles.css            # Folha de estilos que define o visual futurista da página
└── creds.txt             # Arquivo onde os dados dos usuários são armazenados
```

##📋 Descrição dos Arquivos

index.html: Página de login onde o usuário insere suas credenciais. Contém o formulário de registro, e usa JavaScript para interações dinâmicas.

capture.php: Script responsável por capturar e armazenar as credenciais inseridas, bem como o IP e o user-agent do usuário.

styles.css: Folha de estilo que define o visual cyberpunk da página, com cores escuras (preto, verde e vermelho) e efeitos de hover e explosão.

creds.txt: Arquivo gerado automaticamente onde as credenciais dos usuários são registradas.


## 🌐 Como Funciona?
Aqui está o fluxo completo de como a página interage com o usuário:

O usuário acessa a página principal no link fornecido.

Ele preenche o formulário com nome de usuário, senha e confirmação de senha.

Ao clicar no botão "Registrar", o botão explode com uma animação de escala e opacidade.

Um pop-up futurista aparece informando que o registro foi bem-sucedido.

Os dados são enviados para o arquivo PHP (capture.php), que:

Captura e armazena o nome de usuário, senha, IP e agente do navegador.
Armazena essas informações no arquivo creds.txt.
O administrador pode monitorar em tempo real os dados que estão sendo inseridos via terminal Linux.


## 🚀 Como Executar o Projeto Localmente

🔧 Pré-requisitos
Para rodar o projeto localmente, você precisará de:

Servidor Apache e PHP: Para hospedar o projeto.
Acesso ao terminal (Linux ou similar): Para monitorar os dados capturados e iniciar o servidor PHP.

Passos para Configurar:

1. Instalar o Apache:
```bash
sudo apt-get install apache2
```

2. Iniciar o Servidor Apache:
```bash
sudo systemctl start apache2
sudo systemctl enable apache2
```




