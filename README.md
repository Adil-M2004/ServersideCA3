✅ Step 1: Create Database
sql
Copy
Edit
CREATE DATABASE premier_league;
USE premier_league;
✅ Step 2: Create teams Table
sql
Copy
Edit
CREATE TABLE teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    stadium VARCHAR(100),
    city VARCHAR(100),
    founded_year INT,
    logo_url VARCHAR(255)
);
✅ Step 3: Create players Table
sql
Copy
Edit
CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(50),
    age INT,
    nationality VARCHAR(100),
    team_id INT,
    goals INT DEFAULT 0,
    assists INT DEFAULT 0,
    appearances INT DEFAULT 0,
    FOREIGN KEY (team_id) REFERENCES teams(id) ON DELETE SET NULL
);
✅ Step 4: Create fixtures Table
sql
Copy
Edit
CREATE TABLE fixtures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    home_team_id INT,
    away_team_id INT,
    fixture_date DATE,
    fixture_time TIME,
    stadium VARCHAR(100),
    home_score INT DEFAULT 0,
    away_score INT DEFAULT 0,
    FOREIGN KEY (home_team_id) REFERENCES teams(id),
    FOREIGN KEY (away_team_id) REFERENCES teams(id)
);
✅ Step 5: Create player_stats Table (optional – detailed stats)
sql
Copy
Edit
CREATE TABLE player_stats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player_id INT,
    fixture_id INT,
    minutes_played INT,
    goals INT,
    assists INT,
    yellow_cards INT,
    red_cards INT,
    FOREIGN KEY (player_id) REFERENCES players(id),
    FOREIGN KEY (fixture_id) REFERENCES fixtures(id)
);
✅ Step 6: Add a sample team (optional for testing)
sql
Copy
Edit
INSERT INTO teams (name, stadium, city, founded_year, logo_url)
VALUES ('Manchester United', 'Old Trafford', 'Manchester', 1878, 'manu_logo.png');

INSERT INTO players (name, position, age, nationality, team_id, goals, assists, appearances) VALUES
('Marcus Rashford', 'Forward', 26, 'England', 2, 12, 5, 30),
('Bruno Fernandes', 'Midfielder', 29, 'Portugal', 2, 8, 10, 32),
('Erling Haaland', 'Forward', 24, 'Norway', 3, 28, 4, 30),
('Kevin De Bruyne', 'Midfielder', 33, 'Belgium', 3, 5, 15, 25),
('Mohamed Salah', 'Forward', 31, 'Egypt', 4, 22, 7, 29),
('Virgil van Dijk', 'Defender', 32, 'Netherlands', 4, 3, 1, 30),
('Bukayo Saka', 'Winger', 23, 'England', 5, 14, 11, 31),
('Declan Rice', 'Midfielder', 25, 'England', 5, 4, 5, 30),
('Raheem Sterling', 'Winger', 30, 'England', 6, 9, 6, 28),
('Enzo Fernández', 'Midfielder', 24, 'Argentina', 6, 2, 7, 27),
('Harry Kane', 'Forward', 31, 'England', 7, 25, 8, 32),
('Son Heung-min', 'Forward', 32, 'South Korea', 7, 17, 10, 30);

INSERT INTO teams (name, stadium, city, founded_year, logo_url) VALUES
('Manchester United', 'Old Trafford', 'Manchester', 1878, 'manu_logo.png'),
('Manchester City', 'Etihad Stadium', 'Manchester', 1880, 'mancity_logo.png'),
('Liverpool', 'Anfield', 'Liverpool', 1892, 'liverpool_logo.png'),
('Arsenal', 'Emirates Stadium', 'London', 1886, 'arsenal_logo.png'),
('Chelsea', 'Stamford Bridge', 'London', 1905, 'chelsea_logo.png'),
('Tottenham Hotspur', 'Tottenham Hotspur Stadium', 'London', 1882, 'tottenham_logo.png');

INSERT INTO fixtures (home_team_id, away_team_id, fixture_date, fixture_time, stadium, home_score, away_score) VALUES
(2, 3, '2025-04-01', '16:00:00', 'Old Trafford', 2, 2),      -- Manchester United vs Man City
(4, 5, '2025-04-02', '17:30:00', 'Anfield', 1, 3),           -- Liverpool vs Arsenal
(6, 7, '2025-04-03', '15:00:00', 'Stamford Bridge', 0, 1),   -- Chelsea vs Tottenham
(3, 4, '2025-04-08', '20:00:00', 'Etihad Stadium', 3, 1),    -- Man City vs Liverpool
(5, 2, '2025-04-09', '18:00:00', 'Emirates Stadium', 2, 1);  -- Arsenal vs Man Utd
CREATE TABLE league_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT NOT NULL,
    played INT DEFAULT 0,
    wins INT DEFAULT 0,
    draws INT DEFAULT 0,
    losses INT DEFAULT 0,
    goals_for INT DEFAULT 0,
    goals_against INT DEFAULT 0,
    goal_difference INT DEFAULT 0,
    points INT DEFAULT 0,
    FOREIGN KEY (team_id) REFERENCES teams(id) ON DELETE CASCADE
);
INSERT INTO league_table (team_id, played, wins, draws, losses, goals_for, goals_against, goal_difference, points) 
VALUES
(2, 0, 0, 0, 0, 0, 0, 0, 0),  -- Manchester United
(3, 0, 0, 0, 0, 0, 0, 0, 0),  -- Manchester City
(4, 0, 0, 0, 0, 0, 0, 0, 0),  -- Liverpool
(5, 0, 0, 0, 0, 0, 0, 0, 0),  -- Arsenal
(6, 0, 0, 0, 0, 0, 0, 0, 0),  -- Chelsea
(7, 0, 0, 0, 0, 0, 0, 0, 0);  -- Tottenham Hotspur