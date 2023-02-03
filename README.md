# Teste CRUD - ZR System

## Projeto desenvolvido por Matheus F. Aquino

![Badge](https://img.shields.io/badge/CRUD-Pessoas-v1.0.0-blue)

---

Índice
================

- [Teste CRUD - ZR System](#teste-crud---zr-system)
  - [Projeto desenvolvido por Matheus F. Aquino](#projeto-desenvolvido-por-matheus-f-aquino)
- [Índice](#índice)
    - [Pré-requisitos](#pré-requisitos)
    - [🎲 Rodando a aplicação](#-rodando-a-aplicação)
    - [🛠 Tecnologias](#-tecnologias)
    - [👨‍💻 Contribuidores](#-contribuidores)
    - [🦸 Autor](#-autor)

---

<h4 align="center">
 🚧  Alrisha 🚀 Em construção...  🚧
</h4>

---

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Laragon ou Outro Servidor Local a Sua Escolha](https://laragon.org/download/) e [Composer](https://getcomposer.org/).
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### 🎲 Rodando a aplicação

```bash
# Acesse seu terminal/cmd
# Clone este repositório em sua pasta de projetos
$ git clone https://github.com/mfaoficial/teste-zr-system

# Acesse a pasta do projeto
$ cd teste-zr-system

# Adicione o .env
$ cp .env.example .env

# Instale as dependências
$ composer install

# Atualize as dependências
$ composer update

# Criando o DB
$ Crie um banco de dados com o nome ```teste-zr-system```

# Atualizando informações necessárias no .env
$ DB_USERNAME=usuarioDoBancoDeDados
$ DB_PASSWORD=senhaDoBancoDeDados

# Criando tabelas e alimentando o DB
$ php artisan migrate
$ php artisan db:seed

# Execute a aplicação
$ acessar o endereço definido em seu programa de servidor local. Ex.: http://localhost
```

---

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel 8.75](https://laravel.com/docs/8.x/installation)
- [PHP 8.1.9](https://www.php.net/)
- [Composer](https://getcomposer.org/)

---

### 👨‍💻 Contribuidores

<table>
  <tr>
    <td align="center"><a href="https://github.com/mfaoficial"><img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/56968366?s=64&v=4" width="100px;" alt=""/><br /><sub><b>Matheus Aquino</b></sub></a><br /></td>
  </tr>
</table>

---

### 🦸 Autor

<a href="https://github.com/mfaoficial">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/56968366?s=64&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Matheus Aquino</b></sub></a>
 <br />
