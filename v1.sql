CREATE TABLE mysubj (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    subj VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)