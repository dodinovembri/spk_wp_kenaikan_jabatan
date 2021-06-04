# Position Histroy
Position History table.

```sql
CREATE TABLE position_history (
	id INT NOT NULL AUTO_INCREMENT,
	employee_id INT NULL,
	position VARCHAR(255) NULL,
   	created_at TIMESTAMP NULL,
   	created_by INT NULL,
	PRIMARY KEY (id)
);
```