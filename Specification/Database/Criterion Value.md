# Criterion Value
Criterion Value table.

```sql
CREATE TABLE criterion_value (
	id INT NOT NULL AUTO_INCREMENT,
	criteria_id INT(50) NULL,
	information VARCHAR(100) NULL,
	score DOUBLE INT NULL,
	benchmark VARCHAR (255) NULL,
 	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id)
);
```

