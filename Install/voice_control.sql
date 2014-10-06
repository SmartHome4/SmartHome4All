CREATE TABLE voice_control (
id INT AUTO_INCREMENT,
id_resident int,
comand VARCHAR(50), 
path_to_exe_file TEXT,
PRIMARY KEY (id),
KEY (comand)
)
