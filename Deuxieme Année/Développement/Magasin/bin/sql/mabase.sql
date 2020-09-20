DROP DATABASE IF EXSISTS magasin; 

CREATE DATABASE magasin; 
USE magasin; 

CREATE table produit(
    ref VARCHAR(5) NOT NULL, 
    desi VARCHAR(30), 
    prix FLOAT, 
    qte INT(3), 
    PRIMARY KEY(ref)
); 