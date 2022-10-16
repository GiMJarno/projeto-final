CREATE TABLE cliente (
  id int(11),
  nome varchar(45)
);

INSERT INTO cliente (id, nome) VALUES
('1', 'Giovane M.'),
('2', 'Felipe'),
('3', 'João Vitor');

CREATE TABLE dispositivo (
  id int(11) NOT NULL,
  modelo varchar(45) DEFAULT NULL,
  armazenamento varchar(8) DEFAULT NULL,
  ram varchar(8) DEFAULT NULL,
  processador varchar(10) DEFAULT NULL,
  placamae varchar(8) DEFAULT NULL,
  idcliente int(11) DEFAULT NULL
);

INSERT INTO dispositivo (id, modelo, armazenamento, ram, processador, placamae, idcliente) VALUES
('1', 'Positivo Teste 1', 'SSD', '2GB', 'Intel', 'LGA', 1),
('2', 'HP 14', 'SSD', '2GB', 'Intel', 'LGA', 1),
('3', 'Positivio Motio Q232A', 'SSD', '2GB', 'Intel', 'LGA', 1),
('4', 'PC Ryzen 5', 'SSD', '16GB', 'AMD', 'AM4', 2);

CREATE TABLE ordemserv (
  id int(11) NOT NULL,
  cliente_idcliente int(11) DEFAULT NULL,
  dispositivo int(11) DEFAULT NULL,
  servico varchar(40) DEFAULT NULL,
  descricao varchar(200) DEFAULT NULL
);

INSERT INTO ordemserv (id, cliente_idcliente, dispositivo, servico, descricao) VALUES
('1', 1, 4, 'Manutenção/Limpeza', ''),
('2', 1, 4, 'Manutenção/Limpeza', '');

ALTER TABLE cliente
  ADD PRIMARY KEY (id);

ALTER TABLE dispositivo
  ADD PRIMARY KEY (id),
  ADD KEY idcliente (idcliente);

ALTER TABLE ordemserv
  ADD PRIMARY KEY (id),
  ADD KEY cliente_idcliente (cliente_idcliente),
  ADD KEY dispositivo (dispositivo);

ALTER TABLE cliente
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE dispositivo
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE ordemserv
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE dispositivo
  ADD CONSTRAINT dispositivo_ibfk_1 FOREIGN KEY (idcliente) REFERENCES cliente (id);

ALTER TABLE ordemserv
  ADD CONSTRAINT ordemserv_ibfk_1 FOREIGN KEY (cliente_idcliente) REFERENCES cliente (id),
  ADD CONSTRAINT ordemserv_ibfk_2 FOREIGN KEY (dispositivo) REFERENCES dispositivo (id);
COMMIT;