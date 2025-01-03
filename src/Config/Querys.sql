CREATE DATABASE career_link;
USE career_link;
CREATE TABLE categorys (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50)
);
CREATE TABLE tags (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50)
);
CREATE TABLE joboffers (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    company_name VARCHAR(50),
    photo TEXT,
    post_name VARCHAR(50),
    `description` VARCHAR(255),
    salary FLOAT,
    `location` VARCHAR(50),
    archive_job DATE,
    tags_id INT,
    categorys_id INT,
    FOREIGN KEY (tags_id) REFERENCES tags(ID) 
        ON DELETE CASCADE 
        ON UPDATE CASCADE,
    FOREIGN KEY (categorys_id) REFERENCES categorys(ID) 
        ON DELETE CASCADE 
        ON UPDATE CASCADE
);
CREATE TABLE role (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50)
);
CREATE TABLE users (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES role(ID) 
        ON DELETE CASCADE 
        ON UPDATE CASCADE
);
INSERT INTO role (`name`) VALUES 
('admin'),
('recruiter'),
('condidate');
INSERT INTO users (`name`, email, `password`, role_id) VALUES 
('FrJ', 'admin@careerlink.com', '1111', 1),
('said', 'said@techcorp.com', '2222', 2),
('hamza', 'hamza@example.com', '3333', 3);
INSERT INTO categorys (`name`) VALUES 
('Technology'),
('Healthcare'),
('Finance'),
('Education'),
('Marketing'),
('Sales'),
('Design'),
('Engineering');
INSERT INTO tags (`name`) VALUES 
('Full-time'),
('Part-time'),
('Remote'),
('Hybrid'),
('On-site'),
('Entry Level'),
('Mid Level'),
('Senior Level'),
('Contract'),
('Internship');
INSERT INTO joboffers (
    company_name,
    photo,
    post_name,
    `description`,
    salary,
    `location`,
    archive_job,
    tags_id,
    categorys_id
) VALUES 
(
    'Google',
    'google_logo.png',
    'Senior Software Engineer',
    'We are seeking an experienced software engineer to join our team and help build scalable solutions...',
    120000,
    'New York, NY',
    '2024-06-30',
    8,
    1
),
(
    'Apple',
    'apple_logo.png',
    'Product Designer',
    'Join our design team to create beautiful and intuitive user experiences for millions of users...',
    95000,
    'San Francisco, CA',
    '2024-07-15',
    7,
    7
),
(
    'Microsoft',
    'microsoft_logo.png',
    'Full Stack Developer',
    'Looking for a talented full stack developer to join our dynamic team...',
    110000,
    'Seattle, WA',
    '2024-06-25',
    7,
    1 
),
(
    'Amazon',
    'amazon_logo.png',
    'Data Scientist',
    'Join our data science team to work on challenging problems and drive business decisions...',
    130000,
    'Boston, MA',
    '2024-07-01',
    8,
    1 
),
(
    'Meta',
    'meta_logo.png',
    'UX Researcher',
    'Help shape the future of social media by conducting user research and providing insights...',
    90000,
    'Los Angeles, CA',
    '2024-07-10',
    7,
    7
),
(
    'Netflix',
    'netflix_logo.png',
    'Marketing Manager',
    'Lead our digital marketing initiatives and drive user engagement...',
    85000,
    'Los Angeles, CA',
    '2024-06-28',
    7,
    5 
);