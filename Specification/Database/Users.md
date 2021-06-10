# Users
Users table.

```sql
CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
    employee_id INT NULL,
	email VARCHAR(50) NULL,
    password VARCHAR(50) NULL,
    role_id TINYINT NULL,
   	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id)
);
```

## Role
| Code | Name |
| ---- | ---- |
| 0 | Administrator |
| 1 | Leader |
| 2 | Interviewer |
| 3 | director |
| 4 | employees |
| 5 | Others |