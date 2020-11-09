DELIMITER //
CREATE PROCEDURE GetAllProjects() 
BEGIN 
SELECT * FROM projects;
END //
DELIMITER ;

Retrive by the following query CALL GetAllProjects