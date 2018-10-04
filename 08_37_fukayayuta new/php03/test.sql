UPDATE gs_an_table SET name='ふかや',email='test',age=30,naiyou='aaa' WHERE id=
UPDATE gs_an_table SET name=:name,email=:email,age=:age,naiyou=:naiyou WHERE id=:id


SELECT * FROM gs_user_table WHERE lid=:lid AND