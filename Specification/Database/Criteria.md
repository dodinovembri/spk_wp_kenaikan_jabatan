# Criteria
Criteria table.

```sql
CREATE TABLE criteria (
	id INT NOT NULL AUTO_INCREMENT,
	criteria_code VARCHAR(100) NULL,
	criteria_name VARCHAR(255) NULL,
	criteria_type VARCHAR(50) NULL,
	criteria_weight INT NULL,
   	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id)
);
```