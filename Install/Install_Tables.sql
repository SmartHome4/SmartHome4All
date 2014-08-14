CREATE table 'residents' (
'id' INT AUTO_INCREMENT,
'num_of_tabs' TINYINT DEFAULT 1,
'acces_priv' SMALLINT DEFAULT 1,
PRIMARY KEY ('id')
)

CREATE table 'voice_control'(
'id' INT AUTO_INCREMENT,
'id_resident' int,
'comand' TEXT, 
'path_to_exe_file' TEXT,
PRIMARY KEY ('comand')
)