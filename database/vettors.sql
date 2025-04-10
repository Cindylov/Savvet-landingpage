CREATE TABLE vettors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    country_id INT NOT NULL,
    state_id INT NOT NULL,
    FOREIGN KEY (country_id) REFERENCES countries(id),
    FOREIGN KEY (state_id) REFERENCES states(id)
);