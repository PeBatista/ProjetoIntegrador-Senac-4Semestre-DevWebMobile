# 🌟 Projeto Integrador 2: Sistema de Gestão de Vacinas 🌟

Bem-vindo ao repositório do Projeto Integrador 2, onde estamos desenvolvendo um **Sistema de Gestão de Vacinas** para facilitar a organização e o controle da carteira de vacinação dos usuários.

## 📌 Link para o Projeto no Figma

🔗 [Acesse o projeto no Figma](https://www.figma.com/design/aBpaQyQNXGCTJP15Yz7m1J/PI---4-Semestre?node-id=5-5&node-type=FRAME&t=VN8osCzAn8i8fv5P-0)

## 📝 Descrição do Projeto

Este projeto visa a criação de um sistema de gestão hospitalar especializado na **organização e controle de vacinas**. O sistema permitirá que os usuários:

- Cadastro de informações pessoais.
- Gerenciamento de vacinas.
- Histórico de vacinação.

## 🗂️ Estrutura das Tabelas do Banco de Dados

O sistema será sustentado por três tabelas principais, conforme descrito abaixo:

### 🧑‍⚕️ Tabela Pessoa

| Campo            | Tipo         | Descrição                           |
|------------------|--------------|-------------------------------------|
| `id_pessoa`      | INT (PK)     | Identificador único da pessoa       |
| `nome`           | VARCHAR(255) | Nome completo do usuário            |
| `idade`          | INT          | Idade do usuário                    |
| `cpf`            | VARCHAR(11)  | CPF do usuário                      |
| `endereco`       | TEXT         | Endereço completo                   |
| `contato`        | VARCHAR(15)  | Telefone ou e-mail para contato     |

- **Descrição**: Armazena as informações básicas dos usuários, permitindo o registro e a identificação no sistema.

### 💉 Tabela Vacinas

| Campo            | Tipo         | Descrição                           |
|------------------|--------------|-------------------------------------|
| `id_vacina`      | INT (PK)     | Identificador único da vacina       |
| `nome_vacina`    | VARCHAR(255) | Nome da vacina                      |
| `data_aplicacao` | DATE         | Data em que a vacina foi aplicada   |
| `lote`           | VARCHAR(50)  | Número do lote da vacina            |
| `fabricante`     | VARCHAR(255) | Nome do fabricante da vacina        |
| `proximo_reforco`| DATE         | Data do próximo reforço, se houver  |
| `id_pessoa`      | INT (FK)     | Referência à pessoa que tomou a vacina |

- **Descrição**: Registra todas as vacinas cadastradas, mantendo um histórico completo para cada usuário.

### 🩺 Tabela Consultas

| Campo             | Tipo         | Descrição                           |
|-------------------|--------------|-------------------------------------|
| `id_consulta`     | INT (PK)     | Identificador único da consulta     |
| `data_consulta`   | DATE         | Data da consulta                    |
| `nome_medico`     | VARCHAR(255) | Nome do médico responsável          |
| `observacoes`     | TEXT         | Observações ou anotações relevantes |
| `id_pessoa`       | INT (FK)     | Referência à pessoa relacionada     |

- **Descrição**: Gerencia as consultas relacionadas às vacinas, fornecendo uma visão completa das interações médicas.

## 🧠 Lógica do Sistema

- **Cadastro de Usuário**: Os usuários serão registrados na *Tabela Pessoa*, com todos os dados necessários para a gestão de vacinas.
- **Registro de Vacinas**: As vacinas aplicadas serão registradas na *Tabela Vacinas*, vinculadas ao usuário correspondente.
- **Gestão de Consultas**: Consultas médicas serão gerenciadas na *Tabela Consultas*, permitindo o acompanhamento completo.
- **Visualização e Relatórios**: O sistema permitirá a visualização da carteira de vacinação e a geração de relatórios detalhados.

## 🛠️ Tecnologias Utilizadas

- **Frontend**: [Figma](https://www.figma.com/) para prototipação e design.
- **Backend**: Banco de dados relacional para armazenar as informações.
- **Documentação**: Normas ABNT para garantir a padronização e clareza.

## 🚀 Estrutura do Projeto

O projeto está estruturado em módulos, com uma separação clara entre frontend (design e interação no Figma) e backend (gestão de dados e lógica do sistema).

---

Sinta-se à vontade para contribuir e ajustar conforme o andamento do projeto! Vamos construir um sistema de gestão de vacinas eficiente e impactante! 💉👩‍⚕️

---
