--
-- Database: mutualismo_operario
--

CREATE DATABASE mutualismo_operario CHARACTER SET utf8 COLLATE utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela socios
--

CREATE TABLE socios (
    id_socio int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_socio varchar(255),
    sexo_socio varchar(255),
    profissao_socio varchar(255),
    tipo_profissao_socio varchar(255),
    imigrante_socio varchar(255),
    elite_socio varchar(255),
    data_entrada date,
    data_saida date
);
INSERT INTO socios (nome_socio, sexo_socio, profissao_socio, tipo_profissao_socio, imigrante_socio, elite_socio, data_entrada, data_saida)
VALUES ('João', 'masculino', 'Comerciante', 'Artesão', '0', '0', '1905-01-01', '1910-12-15');



--
-- Estrutura da tabela conta_corrente
--

CREATE TABLE conta_corrente (
    id_conta int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    deve int(255),
    haver int(255),
    data_pagamento date,
    id_socio int,    
    FOREIGN KEY (id_socio) REFERENCES socios(id_socio)
);
INSERT INTO conta_corrente (deve, haver, data_pagamento, id_socio)
VALUES ('0', '1000', '1905-12-02', '1');


--
-- Estrutura da tabela caixa
--

CREATE TABLE caixa (
    id_caixa int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    instituicao varchar(255),
    valor int(255),
    tipo_pagamento boolean,
    data_pagamento_caixa date,
    id_socio int,    
    FOREIGN KEY (id_socio) REFERENCES socios(id_socio)
);
INSERT INTO caixa (instituicao, valor, tipo_pagamento, data_pagamento_caixa, id_socio)
VALUES ('Lira', '5000', '0', '1905-05-02', '1');

CREATE TABLE instituicao (
    instituicao_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_instituicao varchar(255)
);
INSERT INTO instituicao (nome_instituicao)
VALUES ('Lira');


