# How to run project ?

1. If you using WindowsOS you need to install 'xampp'.
	https://www.apachefriends.org/download.html.
2. After installation open xampp-control.
3. Run Apache and MySql.
4. Start shell and login into mysql server.
5. Create database nejra_sarajevo;

```sql

CREATE DATABASE `tourist` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */
```

#### Create table


```sql

create table contact
(
	id int auto_increment
		primary key,
	full_name varchar(64) null,
	email varchar(64) null,
	message longtext null
);

6. After that copy project files in directory C://xampp/htdocs
7. After that open you browser and go to localhost/{{project-folder-name}}

# Enjoy
