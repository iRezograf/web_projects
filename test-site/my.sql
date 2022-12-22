CREATE TABLE  classmates (
  classmatesId INTEGER PRIMARY KEY,
  name TEXT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Анастасия Сдобникова',  22, 'г. Москва');
INSERT INTO classmates VALUES (0002, 'Вера Лобова', 25, 'Екатеринбург');
INSERT INTO classmates VALUES (0003, 'Александра Маркова', 29, 'Екатеринбург');
INSERT INTO classmates VALUES (0004, 'Дмитрий Шаталов', 45, 'Москва');
INSERT INTO classmates VALUES (0005, 'Алексей Кобзев', 32, 'Екатеринбург');
INSERT INTO classmates VALUES (0006, 'Вадим Шаповалов', 36, 'Москва');
INSERT INTO classmates VALUES (0007, 'Юлия Ржевская', 17, 'Москва');
INSERT INTO classmates VALUES (0008, 'Александр Бородулин', 19, 'Москва');
INSERT INTO classmates VALUES (0009, 'Екатерина Чусова', 23, 'Санкт-Петербург');
INSERT INTO classmates VALUES (0010, 'Никита Кузнецов', 22, 'Санкт-Петербург');

-- fetch 
SELECT name FROM classmates WHERE address = 'Москва' AND age < 30 AND age > 18;
