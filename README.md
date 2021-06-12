# How to run project ?

1. If you using WindowsOS you need to install 'xampp'.
	https://www.apachefriends.org/download.html.
2. After installation open xampp-control.
3. Run Apache and MySql.
4. Start shell and login into mysql server.
5. Create database tourist;

```sql

CREATE DATABASE `tourist` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */
```

#### Create tables


```sql

create table tourist.tourist_info
(
	id int auto_increment
		primary key,
	first_name varchar(64) null,
	last_name varchar(64) null,
	email varchar(64) null
);

create table tourist.opinions
(
	id int auto_increment
		primary key,
	id_tourist int null,
	website_opinion longtext null,
	location_opinion longtext null,
	created_date timestamp default CURRENT_TIMESTAMP null,
	constraint opinions_ibfk_1
		foreign key (id_tourist) references tourist.tourist_info (id)
);

create index id_tourist
	on tourist.opinions (id_tourist);

create table tourist.user
(
	id int auto_increment
		primary key,
	username varchar(64) null,
	password varchar(64) null
);


```
### Insert credentials

```sql
INSERT INTO user(username,password) values(admin,admin);

```
6. After that copy project files in directory C://xampp/htdocs
7. After that open you browser and go to localhost/{{project-folder-name}}

# Enjoy
