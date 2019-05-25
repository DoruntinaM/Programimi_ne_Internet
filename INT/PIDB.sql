DROP DATABASE IF EXISTS PI;
CREATE DATABASE PI;
USE PI;

CREATE TABLE Users (
  username VARCHAR(255),
  password VARCHAR(255),
  fName varchar(255),
  Sirname varchar(255),
  PRIMARY KEY (username)
);
