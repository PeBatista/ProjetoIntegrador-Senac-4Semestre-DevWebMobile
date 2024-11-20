-- Tabela Pessoa (com coluna de senha)
CREATE TABLE Pessoa (
    id_pessoa INT PRIMARY KEY,
    nome VARCHAR(255) NULL,
    cpf VARCHAR(255) UNIQUE NULL,
    cep varchar(255) null,
    endereco TEXT NOT NULL,
    contato VARCHAR(15) NOT NULL,
    dt_nascimento DATE NULL,
    cns varchar(255) null,
    rg varchar(255) UNIQUE null,
    senha VARCHAR(255) NOT NULL 
);

-- Tabela Vacinas (com coluna de senha)
CREATE TABLE Vacinas (
    id_vacina INT PRIMARY KEY,
    nome_vacina VARCHAR(255) NULL,
    lote VARCHAR(50) NULL,
    fabricante VARCHAR(255) NULL);

-- Tabela Consultas
CREATE TABLE Consultas (
    id_consulta INT PRIMARY KEY,
    data_consulta DATE NULL,
    nome_medico VARCHAR(255) NULL,
    observacoes TEXT,
    data_aplicacao DATE NULL,
    id_pessoa INT,
    id_vacina INT,
    FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id_pessoa),
    FOREIGN KEY (id_vacina) REFERENCES Vacinas(id_vacina)
);
