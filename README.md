Create the teams Table
sql
Copy
Edit
CREATE TABLE IF NOT EXISTS teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    stadium VARCHAR(100),
    city VARCHAR(100),
    founded_year INT,
    logo_url VARCHAR(255)
);
3. Create the league_table
sql
Copy
Edit
CREATE TABLE IF NOT EXISTS league_table (
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
4. Insert Premier League Teams
Ensure that each team has a unique ID and no duplicates. Here's an example for a few teams:

sql
Copy
Edit
INSERT INTO teams (name, stadium, city, founded_year, logo_url) VALUES
('Liverpool', 'Anfield', 'Liverpool', 1892, 'liverpool_logo.png'),
('Arsenal', 'Emirates Stadium', 'London', 1886, 'arsenal_logo.png'),
('Manchester City', 'Etihad Stadium', 'Manchester', 1880, 'mancity_logo.png'),
('Newcastle United', 'St James'' Park', 'Newcastle', 1892, 'newcastle_logo.png'),
('Chelsea', 'Stamford Bridge', 'London', 1905, 'chelsea_logo.png'),
('Nottingham Forest', 'City Ground', 'Nottingham', 1865, 'nottmforest_logo.png'),
('Aston Villa', 'Villa Park', 'Birmingham', 1874, 'astonvilla_logo.png'),
('AFC Bournemouth', 'Vitality Stadium', 'Bournemouth', 1899, 'bournemouth_logo.png'),
('Brentford', 'Gtech Community Stadium', 'London', 1889, 'brentford_logo.png'),
('Brighton & Hove Albion', 'Amex Stadium', 'Brighton', 1901, 'brighton_logo.png'),
('Fulham', 'Craven Cottage', 'London', 1879, 'fulham_logo.png'),
('Crystal Palace', 'Selhurst Park', 'London', 1905, 'crystalpalace_logo.png'),
('Wolverhampton Wanderers', 'Molineux Stadium', 'Wolverhampton', 1877, 'wolves_logo.png'),
('Everton', 'Goodison Park', 'Liverpool', 1878, 'everton_logo.png'),
('Manchester United', 'Old Trafford', 'Manchester', 1878, 'manu_logo.png'),
('Tottenham Hotspur', 'Tottenham Hotspur Stadium', 'London', 1882, 'tottenham_logo.png'),
('West Ham United', 'London Stadium', 'London', 1895, 'westham_logo.png'),
('Ipswich Town', 'Portman Road', 'Ipswich', 1878, 'ipswich_logo.png'),
('Leicester City', 'King Power Stadium', 'Leicester', 1884, 'leicester_logo.png'),
('Southampton', 'St Mary''s Stadium', 'Southampton', 1885, 'southampton_logo.png'); 
CREATE TABLE IF NOT EXISTS fixtures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    home_team_id INT NOT NULL,
    away_team_id INT NOT NULL,
    match_date DATE,
    home_score INT,
    away_score INT,
    FOREIGN KEY (home_team_id) REFERENCES teams(id),
    FOREIGN KEY (away_team_id) REFERENCES teams(id)
);

INSERT INTO league_table (team_id, played, wins, draws, losses, goals_for, goals_against, goal_difference, points) 
VALUES
(1, 35, 25, 7, 3, 81, 35, 46, 82),   -- Liverpool
(2, 35, 18, 13, 4, 64, 31, 33, 67),  -- Arsenal
(3, 35, 19, 7, 9, 67, 43, 24, 64),   -- Man City
(4, 35, 19, 6, 10, 66, 45, 21, 63),  -- Newcastle
(5, 35, 18, 9, 8, 62, 41, 21, 63),   -- Chelsea
(6, 35, 18, 7, 10, 54, 42, 12, 61),  -- Nottm Forest
(7, 35, 17, 9, 9, 55, 49, 6, 60),    -- Aston Villa
(8, 35, 14, 11, 10, 55, 42, 13, 53), -- Bournemouth
(9, 35, 15, 7, 13, 62, 53, 9, 52),   -- Brentford
(10, 35, 13, 13, 9, 57, 56, 1, 52),  -- Brighton
(11, 35, 14, 9, 12, 50, 47, 3, 51),  -- Fulham
(12, 35, 11, 13, 11, 44, 48, -4, 46),-- Crystal Palace
(13, 35, 12, 5, 18, 51, 62, -11, 41),-- Wolves
(14, 35, 8, 15, 12, 36, 43, -7, 39), -- Everton
(15, 35, 10, 9, 16, 42, 51, -9, 39), -- Man United
(16, 35, 11, 5, 19, 63, 57, 6, 38),  -- Tottenham
(17, 35, 9, 10, 16, 40, 59, -19, 37),-- West Ham
(18, 35, 4, 10, 21, 35, 76, -41, 22),-- Ipswich Town
(19, 35, 5, 6, 24, 29, 76, -47, 21), -- Leicester City
(20, 35, 2, 5, 28, 25, 82, -57, 11); -- Southampton

INSERT INTO fixtures (home_team_id, away_team_id, match_date, home_score, away_score) 
VALUES
(1, 2, '2024-08-15', 2, 1),  -- Liverpool vs Manchester United
(3, 4, '2024-08-15', 3, 1),  -- Manchester City vs Arsenal
(5, 6, '2024-08-16', 1, 2),  -- Chelsea vs Nottingham Forest
(7, 8, '2024-08-16', 3, 0),  -- Aston Villa vs Bournemouth
(9, 10, '2024-08-17', 2, 2), -- Brentford vs Brighton
(11, 12, '2024-08-17', 0, 1), -- Fulham vs Crystal Palace
(13, 14, '2024-08-18', 1, 1), -- Wolves vs Everton
(15, 16, '2024-08-18', 2, 3), -- Manchester United vs Tottenham
(17, 18, '2024-08-19', 0, 1), -- West Ham United vs Ipswich Town
(19, 20, '2024-08-19', 1, 1), -- Leicester City vs Southampton
(2, 3, '2024-08-22', 1, 2),  -- Manchester United vs Manchester City
(4, 5, '2024-08-22', 2, 2),  -- Arsenal vs Chelsea
(6, 7, '2024-08-23', 0, 2),  -- Nottingham Forest vs Aston Villa
(8, 9, '2024-08-23', 3, 1),  -- Bournemouth vs Brentford
(10, 11, '2024-08-24', 1, 0), -- Brighton vs Fulham
(12, 13, '2024-08-24', 1, 2), -- Crystal Palace vs Wolves
(14, 15, '2024-08-25', 2, 1), -- Everton vs Manchester United
(16, 17, '2024-08-25', 2, 2), -- Tottenham vs West Ham United
(18, 19, '2024-08-26', 0, 3), -- Ipswich Town vs Leicester City
(20, 1, '2024-08-26', 2, 3);  -- Southampton vs Liverpool

CREATE TABLE IF NOT EXISTS players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    position VARCHAR(50),
    team_id INT NOT NULL,
    FOREIGN KEY (team_id) REFERENCES teams(id) ON DELETE CASCADE
);
CREATE TABLE IF NOT EXISTS player_stats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player_id INT NOT NULL,
    fixture_id INT NOT NULL,
    goals INT DEFAULT 0,
    assists INT DEFAULT 0,
    possession_lost INT DEFAULT 0,
    contact_tackles INT DEFAULT 0,
    kickouts_won INT DEFAULT 0,
    kickouts_lost INT DEFAULT 0,
    minutes_played INT DEFAULT 0,
    FOREIGN KEY (player_id) REFERENCES players(id) ON DELETE CASCADE,
    FOREIGN KEY (fixture_id) REFERENCES fixtures(id) ON DELETE CASCADE
);
INSERT INTO players (name, age, position, team_id)
VALUES
('Mohamed Salah', 31, 'Forward', 1),
('Kevin De Bruyne', 33, 'Midfielder', 3),
('Marcus Rashford', 27, 'Forward', 2),
('Declan Rice', 26, 'Midfielder', 4),
('Raheem Sterling', 30, 'Winger', 5);

INSERT INTO player_stats (player_id, fixture_id, goals, assists, possession_lost, contact_tackles, kickouts_won, kickouts_lost, minutes_played)
VALUES
(1, 1, 2, 1, 3, 2, 0, 0, 90),
(2, 2, 1, 2, 2, 1, 0, 0, 88),
(3, 1, 0, 0, 5, 3, 0, 0, 90),
(4, 2, 0, 1, 2, 4, 0, 0, 89),
(5, 3, 1, 0, 1, 0, 0, 0, 75);