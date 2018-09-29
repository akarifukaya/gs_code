INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES('織田信長','test0@test.jp','メモ',sysdate());

INSERT INTO gs_an_table
(name,email,naiyou,indate)
VALUES
('徳川家康','test0@test.jp','メモ',sysdate());

INSERT INTO gs_an_table
(name,email,naiyou,indate)
VALUES
('伊達政宗','test0@test.jp','メモ',sysdate());


--全指定
SELECT * FROM gs_an_table;
--単体指定
SELECT name FROM gs_an_table;
--複数指定
SELECT name,email FROM gs_an_table;
--演算子を使う
SELECT * FROM gs_an_table WHERE id=1;
SELECT * FROM gs_an_table WHERE >id=3;
--指定検索
SELECT * FROM gs_an_table WHERE name='織田信長';
--あいまいな検索
SELECT * FROM gs_an_table WHERE name LIKE'%1%' ;
SELECT * FROM gs_an_table WHERE name LIKE'2015-06%' ;
SELECT * FROM gs_an_table WHERE name LIKE'%@gmail.com' ;
--検索条件を複数指定
SELECT * FROM gs_an_table WHERE id = 1 OR id =2;
SELECT * FROM gs_an_table WHERE id >= 1 AND id <=3;

--並び替えた日時
SELECT * FROM gs_an_table ORDER BY indate DESC;
--表示件数を制限する
SELECT * FROM gs_an_table LIMIT 5; --５表示だすには！


