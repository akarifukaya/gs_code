--課題１
SELECT * FROM gs_an_table WHERE id = 1 OR id =3 OR id =5;
--課題２
SELECT * FROM gs_an_table WHERE id >= 4 AND id <=8;
--課題３
SELECT * FROM gs_an_table WHERE email LIKE'%test1@test.jp';
--課題４
SELECT * FROM gs_an_table ORDER BY indate DESC;
--課題５
SELECT * FROM gs_an_table WHERE indate LIKE'2017-05-26%' OR age =20 ;
--課題６
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 5;
--課題７
SELECT age,count(*)FROM gs_an_table GROUP BY age