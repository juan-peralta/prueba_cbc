DROP PROCEDURE IF EXISTS lideres;

DELIMITER $$ 
CREATE PROCEDURE `lideres`() BEGIN
SELECT
    DISTINCT e.supervisedby_id,
    s.firstname,
    s.lastname,
    s.email,
    s.phone,
    s.birthday
FROM
    employee e
    LEFT JOIN employee s ON e.supervisedby_id = s.id
WHERE
    e.supervisedby_id > 0;

END$$ 
DELIMITER ;



DROP PROCEDURE IF EXISTS employees;

DELIMITER $ $ CREATE PROCEDURE `employees`() BEGIN
SELECT
SELECT
    e.firstname,
    e.lastname,
    e.email,
    e.phone,
    CASE
        WHEN e.supervisedby_id IS NULL THEN 'no'
        ELSE 'si'
    END AS es_lider_de_equipo
FROM
    employee AS e;

END $ $ DELIMITER;