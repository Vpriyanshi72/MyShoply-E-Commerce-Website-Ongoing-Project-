CREATE DATABASE my_shoply;
USE my_shoply;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mobile VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    _password VARCHAR(255) NOT NULL
    cpassword VARCHAR(255) NOT NULL
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price INT,
    category VARCHAR(50)
);

INSERT INTO products (name, price, category, image) VALUES

-- MEN
('Men T-Shirt', 599, 'men', 'images/men1.jpg'),
('Formal Shirt', 1299, 'men', 'images/men2.jpg'),
('Men Shoes', 2499, 'men', 'images/men3.jpg'),

-- WOMEN
('Women Kurti', 899, 'women', 'images/women1.jpg'),
('Handbag', 1499, 'women', 'images/women2.jpg'),
('Heels Sandal', 1999, 'women', 'images/women3.jpg'),

-- KIDS / CHILD
('Teddy Bear', 700, 'kids', 'images/kids1.jpg'),
('Remote Car', 1200, 'kids', 'images/kids2.jpg'),
('School Bag', 850, 'kids', 'images/kids3.jpg'),

-- GIFTS
('Photo Frame', 800, 'gifts', 'images/gift1.jpg'),
('Couple Watch', 2500, 'gifts', 'images/gift2.jpg'),
('Gift Hamper', 3000, 'gifts', 'images/gift3.jpg'),

-- OTHERS
('Wall Clock', 1800, 'others', 'images/other1.jpg'),
('Tea Set', 2200, 'others', 'images/other2.jpg'),
('Decoration Lamp', 1500, 'others', 'images/other3.jpg');

INSERT INTO products (name, price, category, image) VALUES
('Dry Red Chili',200,'grocery','images/redchili.jpg'),
('Green Chili',60,'grocery','images/greenchili.jpg'),
('Chili Powder',180,'grocery','images/chilipowder.jpg');
