# Result
Result table.

```sql
CREATE TABLE result (
	id INT NOT NULL AUTO_INCREMENT,
    date_of_promotion DATE NULL,
	employee_id INT NULL,
	ranking INT NULL,	
    status INT NULL,
 	created_at TIMESTAMP NULL,
   	created_by INT NULL,
	PRIMARY KEY (id)
);
```

## Status
| Code | Name |
| ---- | ---- |
| 0 | Inactive
| 1 | Active/ Accepted |
| 2 | Draft |
| 3 | Rejected |
| 4 | Not Latest |