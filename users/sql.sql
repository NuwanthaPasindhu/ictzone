CREATE TABLE recordings(
id int NOT null AUTO_INCREMENT PRIMARY KEY,
    rdate date,
    grade int,
    link varchar(225),
    ddate date

) 


CREATE EVENT IF NOT EXISTS event_01
ON SCHEDULE AT CURRENT_TIMESTAMP 
DO DELETE FROM recordings WHERE id = 