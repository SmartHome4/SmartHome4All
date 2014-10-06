CREATE TABLE elements_events(
 element_id VARCHAR(20),
 true_class TINYTEXT,
 false_class TINYTEXT,
 ongoing_class TINYTEXT,
 on_value TINYTEXT,
 off_value TINYTEXT,
 ongoing_value TINYTEXT,
 enable BOOLEAN,
PRIMARY KEY(element_id)
)
