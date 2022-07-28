/* ---------------------------------------------------------------------- */
/* ------------------- Stored Procedures Audit Logs	  ------------------- */
/* ---------------------------------------------------------------------- */

DROP PROCEDURE IF EXISTS CREAR_LOG; 

DELIMITER $$

CREATE PROCEDURE CREAR_LOG (IN VAR_ID_USUARIO INT,IN VAR_LOG_DESCRIPTION VARCHAR(100),IN VAR_LOG_TYPE INT,IN VAR_FECHA DATE)
BEGIN
	
    INSERT INTO AUDIT_LOGS (
		ID_USUARIO,
        LOG_DESCRIPTION,
        LOG_TYPE,
        FECHA
	) VALUES (
		VAR_ID_USUARIO,
        VAR_LOG_DESCRIPTION,
        VAR_LOG_TYPE,
        VAR_FECHA
    );
        
END $$

DELIMITER ; 

DROP PROCEDURE IF EXISTS VER_LOGS;  

DELIMITER $$

CREATE PROCEDURE VER_LOGS ()
BEGIN

    SELECT 
		ID_USUARIO,
        LOG_DESCRIPTION,
        LOG_TYPE,
        FECHA
	FROM AUDIT_LOGS; 
    
END $$

DELIMITER ; 


/* ---------------------------------------------------------------------- */
/* --------------------- Stored Procedures Usuarios --------------------- */
/* ---------------------------------------------------------------------- */

DROP PROCEDURE IF EXISTS CREAR_USUARIO; 

DELIMITER $$

CREATE PROCEDURE CREAR_USUARIO (IN VAR_NOMBRE_USUARIO VARCHAR(50), IN VAR_CONTRASEÑA VARCHAR(25), IN VAR_ROLE_USUARIO INT, IN VAR_ESTADO BOOLEAN)
BEGIN

	INSERT INTO USUARIOS (
		NOMBRE_USUARIO,
        CONTRASEÑA,
        ROLE_USUARIO,
        ESTADO
    ) VALUES (
		VAR_NOMBRE_USUARIO, 
        VAR_CONTRASEÑA, 
        VAR_ROLE_USUARIO, 
        VAR_ESTADO
    );

END $$

DELIMITER ; 


DROP PROCEDURE IF EXISTS ACTUALIZAR_USUARIO; 

DELIMITER $$

CREATE PROCEDURE ACTUALIZAR_USUARIO (IN VAR_ID INT, IN VAR_NOMBRE_USUARIO VARCHAR(50), IN VAR_CONTRASEÑA VARCHAR(25), IN VAR_ROLE_USUARIO INT, IN VAR_ESTADO BOOLEAN)
BEGIN

	UPDATE USUARIOS SET
		NOMBRE_USUARIO = VAR_NOMBRE_USUARIO, 
        CONTRASEÑA = VAR_CONTRASEÑA, 
        ROLE_USUARIO = VAR_ROLE_USUARIO, 
        ESTADO = VAR_ESTADO
	WHERE
		ID_USUARIO = VAR_ID; 

END $$

DELIMITER ; 

DROP PROCEDURE IF EXISTS ELIMINAR_USUARIO; 

DELIMITER $$

CREATE PROCEDURE ELIMINAR_USUARIO (IN VAR_ID INT)
BEGIN

	DELETE FROM 
		USUARIOS 
	WHERE
		ID_USUARIO = VAR_ID; 
    
END $$

DELIMITER ; 

DROP PROCEDURE IF EXISTS VER_USUARIOS; 

DELIMITER $$

CREATE PROCEDURE VER_USUARIOS ()
BEGIN

	SELECT 
		NOMBRE_USUARIO,
        CONTRASEÑA,
        ROLE_USUARIO,
        ESTADO
	FROM 
		USUARIOS; 
        
END $$

DELIMITER ;	
/* ---------------------------------------------------------------------- */
/* --------------------- Stored Procedures Mensaje 	--------------------- */
/* ---------------------------------------------------------------------- */

DROP PROCEDURE IF EXISTS CREAR_MENSAJE; 

DELIMITER $$

CREATE PROCEDURE CREAR_MENSAJE (IN VAR_ID_USUARIO INT, IN VAR_ID_HILO INT, IN VAR_FECHA DATE, IN VAR_MENSAJE VARCHAR(1000))
BEGIN

	INSERT INTO MENSAJE (
		ID_USUARIO,
        ID_HILO,
        FECHA,
        MENSAJE
    ) VALUES (
		VAR_ID_USUARIO,
        VAR_ID_HILO,
        VAR_FECHA,
        VAR_MENSAJE
    );

END $$

DELIMITER ; 

DROP PROCEDURE IF EXISTS ACTUALIZAR_MENSAJE; 

DELIMITER $$

CREATE PROCEDURE ACTUALIZAR_MENSAJE (IN VAR_ID_COMENTARIO INT, IN VAR_ID_USUARIO INT, IN VAR_ID_HILO INT, IN VAR_FECHA DATE, IN VAR_MENSAJE VARCHAR(1000))
BEGIN
	UPDATE MENSAJE SET
		ID_USUARIO = VAR_ID_USUARIO, 
        ID_HILO = VAR_ID_HILO,
        FECHA = VAR_ID_FECHA,
        MENSAJE = VAR_MENSAJE
	WHERE
		ID_COMENTARIO = VAR_ID_COMENTARIO;
        
END $$

DELIMITER ; 

DROP PROCEDURE IF EXISTS ELIMINAR_MENSAJE; 

DELIMITER $$

CREATE PROCEDURE ELIMINAR_MENSAJE (IN ID_COMENTARIO INT)
BEGIN
	
    DELETE FROM 
		MENSAJE
	WHERE
		ID_COMENTARIO = VAR_ID_COMENTARIO;
    
END $$

DELIMITER ; 

DROP PROCEDURE IF EXISTS VER_MENSAJES;

DELIMITER $$

CREATE PROCEDURE VER_MENSAJES ()
BEGIN

	SELECT 
		ID_USUARIO,
        ID_HILO,
        FECHA,
        MENSAJE
	FROM 
		MENSAJE; 

END $$

DELIMITER ; 

DROP PROCEDURE IF EXISTS COUNT_MENSAJES_USUARIOS; 

DELIMITER $$

CREATE PROCEDURE COUNT_MENSAJES_USUARIOS (IN VAR_ID_USUARIO INT)
BEGIN

	SELECT
		MONTH(FECHA) AS MES,
        COUNT(MENSAJE) AS CANTIDAD_MENSAJES
	FROM 
		MENSAJE
    WHERE
		ID_USUARIO = VAR_ID_USUARIO
    GROUP BY MES; 

END $$

DELIMITER ; 


