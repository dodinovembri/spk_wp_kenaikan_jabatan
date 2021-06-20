# employee
Employee table.

```sql
CREATE TABLE employee (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NULL,
	nik VARCHAR(100) NULL,
	gender TINYINT NULL,
	email VARCHAR(255) NULL,
	image VARCHAR(50) NULL,
	location TEXT NULL,
    division_id VARCHAR(255) NULL,
	position VARCHAR(255) NULL,
	new_position VARCHAR(255) NULL,
	type TINYINT DEFAULT 4,
    is_rating_admin TINYINT DEFAULT 0,
    is_rating_leader TINYINT DEFAULT 0,
    is_rating_interviewer TINYINT DEFAULT 0,
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

## Position
| Code | Name |
| ---- | ---- |
| 0 | ADM/OPR/MEC/ELEC/ANL |
| 1 | Junior Manager |
| 2 | Manager |
| 3 | Senior Manager |