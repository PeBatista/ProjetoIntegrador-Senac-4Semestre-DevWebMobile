-- Tabela Pessoa (com coluna de senha)
CREATE TABLE Pessoa (
    id_pessoa INT PRIMARY KEY,
    nome VARCHAR(255) NULL,
    idade INT CHECK (idade >= 0),  -- Garantindo que a idade seja um valor não negativo
    cpf VARCHAR(11) UNIQUE NULL,  -- CPF deve ser único
    endereco TEXT NOT NULL,
    contato VARCHAR(15) NOT NULL,
    senha VARCHAR(255) NOT NULL  -- Coluna de senha adicionada
);

-- Tabela Vacinas (com coluna de senha)
CREATE TABLE Vacinas (
    id_vacina INT PRIMARY KEY,
    nome_vacina VARCHAR(255) NULL,
    data_aplicacao DATE NULL,
    lote VARCHAR(50) NULL,
    fabricante VARCHAR(255) NULL,
    proximo_reforco DATE,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id_pessoa)
);

-- Tabela Consultas
CREATE TABLE Consultas (
    id_consulta INT PRIMARY KEY,
    data_consulta DATE NULL,
    nome_medico VARCHAR(255) NULL,
    observacoes TEXT,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id_pessoa)
);
