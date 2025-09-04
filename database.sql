-- Créer la base de données
CREATE DATABASE IF NOT EXISTS reseau_social;

-- Utiliser cette base
USE reseau_social;

-- Créer la table utilisateurs
CREATE TABLE IF NOT EXISTS utilisateurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  email VARCHAR(150) UNIQUE NOT NULL,
  motdepasse VARCHAR(255) NOT NULL,
  date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
