# 📒 Projeto Agenda de Contatos (PHP + MySQL)

Este projeto foi desenvolvido como atividade prática do **curso técnico de Informatica para Internet do Senac**, com o objetivo de aplicar conceitos de **programação web**, **PHP estruturado**, **PDO** e **operações CRUD** (Create, Read, Update e Delete).

A aplicação consiste em uma **agenda de contatos**, permitindo cadastrar, visualizar, editar e excluir contatos armazenados em um banco de dados MySQL.

---

## 🚀 Funcionalidades

- ✅ Cadastrar novos contatos  
- ✅ Listar contatos cadastrados  
- ✅ Visualizar detalhes de um contato  
- ✅ Editar contatos existentes  
- ✅ Excluir contatos  
- ✅ Contador total de contatos  
- ✅ Organização por ordem alfabética  

---

## 🛠️ Tecnologias Utilizadas

- **PHP** (PDO)
- **MySQL**
- **HTML5**
- **CSS3**
- **BootsTrap**
- **Servidor local (XAMPP/WAMP/Laragon)**

---

## 📂 Estrutura do Projeto
## 📂 Estrutura do Projeto

<pre>
Projeto-agenda/
├── config/
│   ├── conection.php        # Conexão com o banco de dados
│   ├── process.php          # Processamento do CRUD
│   └── contactsCounter.php  # Contador de contatos
│
├── templates/
│   ├── header.php           # Cabeçalho do site
│   ├── footer.php           # Rodapé
│   └── backbtn.php          # Botão de voltar reutilizável
│
├── CSS/
│   └── style.css            # Estilos da aplicação
│
├── index.php                # Página principal (lista de contatos)
├── create.php               # Cadastro de contato
├── edit.php                 # Edição de contato
├── show.php                 # Visualização de contato

</pre>





---

## ⚙️ Como Executar o Projeto

### 1️⃣ Clone o repositório

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git

2️⃣ Configure o servidor local

Utilize XAMPP, WAMP ou Laragon
Coloque o projeto dentro da pasta htdocs (ou equivalente)

3️⃣ Crie o banco de dados

CREATE DATABASE agenda;

CREATE TABLE contatos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone INT NOT NULL,
    comentario TEXT NOT NULL
);


4️⃣ Configure a conexão

No arquivo config/conection.php, ajuste se necessário:
$host = "localhost";
$db   = "agenda";
$user = "root";
$pass = "";

5️⃣ Acesse no navegador
http://localhost/Projeto-agenda
