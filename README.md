# Gerenciamento de Usuários - Laravel

Sistema completo de gerenciamento de usuários desenvolvido com Laravel, oferecendo uma interface intuitiva e responsiva para administração de usuários. O projeto implementa as principais operações CRUD (Create, Read, Update, Delete) com validações, autenticação e suporte a múltiplos idiomas.

## 🚀 Funcionalidades

- Autenticação completa de usuários
- Cadastro de novos usuários com validação em tempo real
- Edição de perfis de usuário
- Visualização detalhada de informações
- Exclusão de contas com confirmação de segurança
- Sistema de notificações para feedback ao usuário
- Interface responsiva com Bootstrap
- Suporte completo a internacionalização (i18n)
- Validação de dados no servidor e cliente
- Sistema de recuperação de senha
- Logs de atividades dos usuários

## 🛠️ Tecnologias Utilizadas

- **PHP 8.2+**
- **Laravel 10.x**
- **MySQL 8.0+**
- **Bootstrap 5.x**
- **JavaScript/jQuery**
- **Composer 2.x**
- **NPM**

## 📋 Pré-requisitos

- PHP >= 8.2
- Composer
- MySQL
- Node.js e NPM
- Extensões PHP necessárias:
  - BCMath
  - Ctype
  - JSON
  - Mbstring
  - OpenSSL
  - PDO
  - Tokenizer
  - XML

## 🔧 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/clevisonbarbosa/gerenciamento-usuario.git
cd gerenciamento-usuario
```

2. Instale as dependências do PHP:
```bash
composer install
```

3. Instale as dependências do Node.js:
```bash
npm install
npm run dev
```

4. Configure o ambiente:
```bash
cp .env.example .env
php artisan key:generate
```

5. Configure o banco de dados no arquivo `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

6. Execute as migrações:
```bash
php artisan migrate
```

7. [Opcional] Execute os seeders para dados de exemplo:
```bash
php artisan db:seed
```

8. Inicie o servidor:
```bash
php artisan serve
```

O projeto estará disponível em `http://localhost:8000`

## 📦 Estrutura do Projeto

```
gerenciamento-usuario/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Services/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   └── lang/
├── routes/
└── public/
    └── video-projeto/
        └── video.mp4
```

## 📹 Vídeo Demonstrativo

Para uma demonstração completa do funcionamento do sistema, assista ao vídeo explicativo disponível em:

```
/video-projeto/video.mp4
```
https://github.com/clevisonbarbosa/gerenciamento-usuario/assets/video-projeto/video.mp4


## 🔐 Segurança

O projeto implementa diversas medidas de segurança:

- Proteção contra CSRF
- Validação de dados
- Sanitização de inputs
- Autenticação robusta
- Proteção contra SQL Injection
- Rate Limiting em rotas sensíveis


## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---
Desenvolvido com ❤️ por [Clevison Barbosa](https://github.com/clevisonbarbosa)
