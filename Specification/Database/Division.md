# Division
Division table.

```sql
CREATE TABLE division (
	id INT NOT NULL AUTO_INCREMENT,
    division_code VARCHAR(50) NOT NULL,
	division_name VARCHAR(100) NULL,
    description VARCHAR(255) NULL,
    status TINYINT DEFAULT '1',
   	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id)
);
```