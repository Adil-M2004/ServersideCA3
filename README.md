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