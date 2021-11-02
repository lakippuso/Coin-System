# Coin-System

# Database Default Config
Database Name: coin_counter_database
Database Username: root
Database Host: localhost
Database Password: "" [None]

// For Database Content
Table: users
Columns:
[user_id] int(10) PRIMARY_KEY AUTO_INCREMENT, 
[first_name] TINYTEXT NOT NULL, 
[last_name] TINYTEXT NOT NULL, 
[email] TINYTEXT NOT NULL,
[username] varchar(99) NOT NULL, 
[password] LONGTEXT NOT NULL

Table: machine_info
Columns:
[machine_id] int(10) PRIMARY_KEY AUTO_INCREMENT, 
[income] int(10) NOT NULL, 
[machine_type] TINYTEXT NOT NULL,
[username] varchar(99) NOT NULL


Table: daily_report
Columns:
[report_id] int(10) PRIMARY_KEY AUTO_INCREMENT, 
[machine_id] int(10) NOT NULL, 
[username] varchar(99) NOT NULL,
[date] date,
[day_income] int(10) NOT NULL,


