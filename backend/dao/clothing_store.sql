create database clothing_store;

CREATE TABLE Users (
    userId INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(100),
    lastName VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    password VARCHAR(255),
    phoneNumber VARCHAR(20),
    address TEXT,
    role VARCHAR(50),
    signedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE Categories (
    categoryId INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100)
);


CREATE TABLE Products (
    productId INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    description TEXT,
    price DECIMAL(10, 2),
    categoryId INT,
    quantity INT,
    imageURL TEXT,
    FOREIGN KEY (categoryId) REFERENCES Categories(categoryId)
);


CREATE TABLE Orders (
    orderId INT PRIMARY KEY AUTO_INCREMENT,
    userId INT,
    totalPrice DECIMAL(10, 2),
    orderStatus VARCHAR(50),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userId) REFERENCES Users(userId)
);


CREATE TABLE OrderItems (
    orderItemId INT PRIMARY KEY AUTO_INCREMENT,
    orderId INT,
    productId INT,
    quantity INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (orderId) REFERENCES Orders(orderId),
    FOREIGN KEY (productId) REFERENCES Products(productId)
);
