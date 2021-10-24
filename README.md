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
[username] TINYTEXT NOT NULL, 
[password] LONGTEXT NOT NULL