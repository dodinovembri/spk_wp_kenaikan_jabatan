# Rating
Rating table.

```sql
CREATE TABLE rating (
	id INT NOT NULL AUTO_INCREMENT,
	employee_id INT NULL,
	criteria_id INT NULL,
	criterion_value_id INT NULL,
 	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id)
);
```