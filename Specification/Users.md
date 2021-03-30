# Users
Users table.

```sql
CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NULL,
	email VARCHAR(50) NULL,
    password VARCHAR(50) NULL,
    role_id BIT DEFAULT '1',
	image VARCHAR(50) NULL,
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

# criteria
criteria table.

```sql
CREATE TABLE criteria (
	id_criteria INT NOT NULL AUTO_INCREMENT,
	criteria VARCHAR(100) NULL,
	weight INT(50) NULL,
   	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id_criteria)
);

# employees
employees table.

```sql
CREATE TABLE employees (
	id_employees INT NOT NULL AUTO_INCREMENT,
	employee_name VARCHAR(100) NULL,
	nik INT(50) NULL,
	gender VARCHAR(50) NULL,
	location VARCHAR(100) NULL,
	position VARCHAR(100) NULL,
   	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id_employees)
);
# rating
rating table.

```sql
CREATE TABLE rating (
	id INT NOT NULL AUTO_INCREMENT,
	id_employees INT(50) NULL,
	id_criteria INT(50) NULL,
	id_criterion_value INT(50) NULL,
	rating_date DATE,
	score INT(50) NULL,
 	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id)
);

# criterion_value
criterion_value table.

```sql
CREATE TABLE criterion_value (
	id_criterion_value INT NOT NULL AUTO_INCREMENT,
	id_criteria INT(50) NULL,
	information VARCHAR(100) NULL,
	score INT(50) NULL,
 	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
   	created_by INT NULL,
	updated_by INT NULL,
	PRIMARY KEY (id_criterion_value)
);