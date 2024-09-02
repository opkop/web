CREATE DATABASE book_search;

USE book_search;

CREATE TABLE searches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    search_type VARCHAR(50),
    keyword VARCHAR(255),
    download VARCHAR(5),
);
