# employee
Employee table.

```sql
CREATE TABLE employee (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NULL,
	nik VARCHAR(100) NULL,
	gender TINYINT NULL,
	location TEXT NULL,
	position VARCHAR(255) NULL,
   	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id)
);
```
## Gender
| Code | Name |
| ---- | ---- |
| 0 | Perempuan |
| 1 | Laki-Laki |