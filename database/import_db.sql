CREATE TABLE IF NOT EXISTS users (
  id int(1) NOT NULL AUTO_INCREMENT,
  login varchar(32) NOT NULL,
  password varchar(60) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (login, email)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
