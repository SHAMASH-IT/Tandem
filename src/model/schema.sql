CREATE TABLE IF NOT EXISTS categories (
    category_description MEDIUMTEXT,
    category_id MEDIUMTEXT,
    category_name MEDIUMTEXT,
    category_parent MEDIUMTEXT DEFAULT '0',
    category_slug MEDIUMTEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    id INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS categories_formations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_category MEDIUMTEXT,
    id_formation MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS clients (
    address MEDIUMTEXT,
    city MEDIUMTEXT,
    client_id MEDIUMTEXT UNIQUE,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    email MEDIUMTEXT,
    fullname MEDIUMTEXT,
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone MEDIUMTEXT,
    zip MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS contacts (
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    email MEDIUMTEXT,
    fullname MEDIUMTEXT,
    id INT AUTO_INCREMENT PRIMARY KEY,
    message MEDIUMTEXT,
    phone MEDIUMTEXT,
    subject MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS events (
    datetime_end DATETIME,
    datetime_start DATETIME,
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_formation MEDIUMTEXT,
    label MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS formations (
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    formation_code MEDIUMTEXT,
    formation_description MEDIUMTEXT,
    formation_id MEDIUMTEXT,
    formation_list MEDIUMTEXT,
    formation_modules MEDIUMTEXT,
    formation_published INT DEFAULT -1,
    formation_short_description MEDIUMTEXT,
    formation_slogan MEDIUMTEXT,
    formation_slug MEDIUMTEXT,
    formation_title MEDIUMTEXT,
    id INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS images (
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifier MEDIUMTEXT,
    image_alt MEDIUMTEXT,
    image_order INT,
    image_src MEDIUMTEXT,
    image_title MEDIUMTEXT,
    image_type MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS info (
    duration MEDIUMTEXT,
    enrolled INT DEFAULT 1,
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_formation MEDIUMTEXT UNIQUE,
    language MEDIUMTEXT,
    lessons INT
);

CREATE TABLE IF NOT EXISTS meta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_formation MEDIUMTEXT,
    meta_description MEDIUMTEXT,
    meta_index MEDIUMTEXT DEFAULT 'dofollow',
    meta_title MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS options (
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    id INT AUTO_INCREMENT PRIMARY KEY,
    option_key MEDIUMTEXT,
    option_value MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS orders (
    cart MEDIUMTEXT,
    client_id MEDIUMTEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    id INT AUTO_INCREMENT PRIMARY KEY,
    status INT DEFAULT 1,
    total FLOAT,
    transaction INT DEFAULT 1
);

CREATE TABLE IF NOT EXISTS reviews (
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted INT,
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_formation MEDIUMTEXT,
    review_content MEDIUMTEXT,
    review_email MEDIUMTEXT,
    review_fullname MEDIUMTEXT,
    review_stars INT
);

CREATE TABLE IF NOT EXISTS tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_formation MEDIUMTEXT,
    keyword MEDIUMTEXT
);

CREATE TABLE IF NOT EXISTS token (
    id INT PRIMARY KEY AUTO_INCREMENT,
    token VARCHAR(255),
    code VARCHAR(255) DEFAULT NULL,
    clicked INT DEFAULT -1,
    user_id INT,
    datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    validity INT DEFAULT 60
);

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id VARCHAR(255),
    username VARCHAR(255),
    password MEDIUMTEXT,
    email VARCHAR(255) UNIQUE,
    role MEDIUMTEXT,
    data MEDIUMTEXT,
    active INT DEFAULT -1,
    connected INT,
    session_token MEDIUMTEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_connexion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);