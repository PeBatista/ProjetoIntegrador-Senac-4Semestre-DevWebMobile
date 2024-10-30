-- Tabela Pessoa (com coluna de senha)
CREATE TABLE Pessoa (
    id_pessoa INT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    idade INT CHECK (idade >= 0),  -- Garantindo que a idade seja um valor não negativo
    cpf VARCHAR(11) UNIQUE NOT NULL,  -- CPF deve ser único
    endereco TEXT NOT NULL,
    contato VARCHAR(15) NOT NULL,
    senha VARCHAR(255) NOT NULL  -- Coluna de senha adicionada
);

-- Tabela Vacinas (com coluna de senha)
CREATE TABLE Vacinas (
    id_vacina INT PRIMARY KEY,
    nome_vacina VARCHAR(255) NOT NULL,
    data_aplicacao DATE NOT NULL,
    lote VARCHAR(50) NOT NULL,
    fabricante VARCHAR(255) NOT NULL,
    proximo_reforco DATE,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id_pessoa)
);

-- Tabela Consultas
CREATE TABLE Consultas (
    id_consulta INT PRIMARY KEY,
    data_consulta DATE NOT NULL,
    nome_medico VARCHAR(255) NOT NULL,
    observacoes TEXT,
    id_pessoa INT,
    FOREIGN KEY (id_pessoa) REFERENCES Pessoa(id_pessoa)
);
