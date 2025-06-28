# 🎓 Conference Management System

Welcome to the **Conference Management System** — a fully functional PHP-based web application tool developed as part of a university course project. Built using **PHP**, **HTML**, **CSS**, **JavaScript**, and **MySQL**, this application is intended for internal use by **conference organizers** to streamline the management of a university-level academic conference. This application enables administrators to manage attendees, sponsors, job postings, session schedules, and finances efficiently via a clean and structured interface (focusing on functionality and database-driven interactions over flashy design). The system interfaces with a backend MySQL-compatible database using PHP PDO, ensuring broad DBMS compatibility.

---

## 🌐 Project Overview

This application is a complete end-to-end system for managing university conference data, implemented as a practical assignment for a Computer Science/Engineering course. The primary focus is on **functionality, accessibility, and database interaction**, using **PDO (PHP Data Objects)** for robust, secure, and DBMS-agnostic operations.

Unlike flashy public-facing sites, this organizer-only tool emphasizes clarity and completeness of core conference operations. All data-driven content is rendered dynamically through PHP modules.



### Key Principles:
- **Functionality First**: Designed with the primary goal of fulfilling real-world conference management tasks for organizers.

- **Clean Architecture**: Pages are broken down into clear modules (e.g., attendees, sessions, sponsors).

- **Portable & Configurable**: Developed to work on most local or hosted environments with minimal setup.

- **Database Agnostic**: Uses PHP's PDO for all database operations, allowing use with various SQL-based systems.

- **Accessible UI**: Focused on readability, logical flow, and ease of use without requiring frontend frameworks.

The application aims to demonstrate a well-organized and modular approach to building dynamic content with PHP, while enforcing best practices for web application development and relational database design.

---


## 📁 File Structure

<pre>
conference_management_system/
├── images/
│   └── conferencelogo.png      # Conference logo 
├── includes/
│   ├── footer.php              # Common footer
│   ├── header.php              # Common header (styles, nav)
│   ├── helper_functions.php    # Reusable formatting functions          
│   └── styles.css              # Styling 
├── modules/                    # All feature modules (dynamic content)
│   ├── add_new_attendee.php
│   ├── all_available_jobs.php
│   ├── company_jobs.php
│   ├── conference_daily_schedule.php
│   ├── conference_financials.php
│   ├── hotel_rooming.php
│   ├── list_of_attendees.php
│   ├── list_of_sponsors.php
│   ├── session_details_management.php
│   ├── sponsorship_companies_management.php
│   └── sub_committee_members.php
├── README.md    
├── conference.php              # Home page / main menu
├── conferencedb.sql
├── connectdb.php               # Database connection (PDO)
└── getdata.php                 # Ignore this file
 
    
</pre>



---

## 🧰 Tech Stack

- **PHP 7+** – Backend logic and dynamic content generation (with PDO for database access)
- **PDO (PHP Data Objects)** – Secure, DBMS-independent database interaction
- **MySQL (or compatible DBMS)** – Data storage and querying (via conferenceDB)
- **HTML5/CSS3** – Structure and styling
- **Vanilla JavaScript** – For form interactivity (e.g., conditional fields) --> but No JavaScript frameworks — plain JS where necessary
- **Responsive and clean UI with a professional touch**

---

## 🚀 Functional Features

The application supports all the following functionalities:

### 👥 Attendee Management

- Add a new attendee (student, professional, sponsor) ->  Note: (automatically links students to rooms and sponsors to companies)
  - Students are assigned to a hotel room
  - Sponsors are linked to a company
- View all attendees organized by type:
  - Students
  - Professionals
  - Sponsors

### 🏨 Hotel Room Viewer

- Select a room from a dropdown menu to view all students assigned to that room

### 🧑‍💼 Sub-Committee Viewer

- Choose a sub-committee from a dropdown menu and list all its members

### 📆 Conference Schedule

- Select a day to view all scheduled sessions with:
  - Time
  - Location
  - Speaker details

### 💼 Job Postings

- View all available jobs sorted by sponsorship level and salary
- Filter job listings by sponsoring company

### 🏢 Sponsor Management

- View all sponsoring companies with their sponsorship level and number of attendees to the conference
- Add a new sponsor company
- Delete an existing company (and cascade delete attendees from that sponsor's company)

### 💰 Financial Report

- Display total revenue breakdown:
  - From registration fees
  - From sponsorship contributions
- Summarized in clearly formatted tables 

### 🔁 Session Editing/Updates

- Change and switch a session’s:
  - Day
  - Time
  - Location
- Ensure no time/location conflicts

---

## 🧪 How to Run

### 1. Clone or Download the Repository
Place it in the appropriate root folder of your local server:
- **XAMPP:** `htdocs/`
- **WAMP:** `www/`

### 2. Create & Load the Database
Run the provided script:

```sql
-- conferencedb.sql
DROP DATABASE IF EXISTS conferenceDB;
CREATE DATABASE IF NOT EXISTS conferenceDB;
USE conferenceDB;
```

-- Followed by table creation and data inserts...
You can run this in tools like phpMyAdmin, MySQL CLI, or DBeaver.


### 3. Configure Your Environment
Ensure the database credentials in connectdb.php match your local setup:
```php
$connection = new PDO('mysql:host=localhost;port=3308;dbname=conferenceDB', 'root', '');
```

### 4. Access the Application

Navigate to:
```bash
http://localhost:PORT/conference_management_system/conference.php
```
(Replace PORT with your configured port, like 8080 or 3308.)

---
### Summary on how to run
Ensure you have:

- PHP (v7+)

- MySQL (or compatible DBMS)

- A local server (e.g., XAMPP/WAMP/MAMP)

Place the project in your htdocs (or equivalent), then visit:
```bash
http://localhost:PORT/conference_management_system/conference.php
```
Update connectdb.php as needed for your DB credentials or port.

---

## 📸 Screenshots 

![Conference](https://github.com/user-attachments/assets/cf1a1832-8c8d-4175-97d5-4990d06b2979)




![Screenshot (684)](https://github.com/user-attachments/assets/f4d1f917-8648-4973-a6ee-a201af5fba6b)
![Screenshot (685)](https://github.com/user-attachments/assets/2d575bce-235e-4a3c-96f1-ba032cceac9d)

![Screenshot (686)](https://github.com/user-attachments/assets/b3bd9904-ebfd-4196-a46b-8e266c27c2fa)
![Screenshot (687)](https://github.com/user-attachments/assets/de5dde28-6db9-47ec-a89d-02203a39139f)
![Screenshot (688)](https://github.com/user-attachments/assets/929dfc2f-06f1-4d96-b056-ce61921e2931)
![Screenshot (689)](https://github.com/user-attachments/assets/9a3acca4-03ce-4d3f-bac4-508185cc9032)
![Screenshot (690)](https://github.com/user-attachments/assets/92722e78-98f5-4148-8e2e-96ed3acc3559)
![Screenshot (691)](https://github.com/user-attachments/assets/17c837bc-444a-4723-b821-a0b11767f324)
![Screenshot (692)](https://github.com/user-attachments/assets/9c04e390-0c47-4004-9c99-90645a685a5b)
![Screenshot (693)](https://github.com/user-attachments/assets/7d392462-2ac9-4321-b817-99f7afd6e3c4)
![Screenshot (694)](https://github.com/user-attachments/assets/a9468202-e1fa-45ec-9452-12edbf2a08f2)
![Screenshot (695)](https://github.com/user-attachments/assets/8cbb510b-452c-462c-a8b0-68256c81f359)
![Screenshot (696)](https://github.com/user-attachments/assets/b93577c9-6cc7-4915-b323-d357127c92cf)

![Screenshot (697)](https://github.com/user-attachments/assets/9f994151-1d9c-4a78-9d69-a10d258bae2b)
![Screenshot (698)](https://github.com/user-attachments/assets/ec95f86d-0869-45b7-a4a9-08039d13a1a1)

![Screenshot (699)](https://github.com/user-attachments/assets/d2f55605-98dc-4bdf-aabd-a98d484256aa)
![Screenshot (700)](https://github.com/user-attachments/assets/12518ef4-d5d7-4ad5-a402-d1a3632ce63e)


![Screenshot (701)](https://github.com/user-attachments/assets/cb9ffbc5-139e-4d85-9870-cf914be2b108)
![Screenshot (702)](https://github.com/user-attachments/assets/834d01a5-6cf8-457b-b0b9-1c4ef6aba95f)




## 🎥 Demo Video
A short walkthrough of the Conference Management System is available below. This demo highlights all core features, including attendee management, sponsorship controls, job postings, and session scheduling.

▶️ Watch the full demo here:
https://youtu.be/PeUEeHX_8Xo?si=YaiZIT_tbwugFAs6

---

🔊 The video includes audio narration and is under 5 minutes as per the project's requirements


---

# Project Development Phases (Comprehensive Breakdown)  
This project was structured into four distinct phases, each building upon the previous to deliver a robust, full-stack web application. Below is an exhaustive, narrative-style breakdown of each phase, covering workflows, technical considerations, challenges, and outcomes.  

---

## **Phase 1: Local Development Environment Setup**  
### **Objective**  
Establish a foundational environment for database management and web development using industry-standard tools.  

### **Key Components**  
1. **Software Stack Installation**:  
   - **XAMPP**: Installed Apache (web server), MySQL (database), and PHP (backend scripting language) as a unified package.  
   - **phpMyAdmin**: Configured for GUI-based MySQL database management.  
   - **OS-Specific Adjustments**:  
     - **Windows**: Standard XAMPP installer with default settings.  
     - **macOS (M1/M2)**: Avoided VM-based XAMPP versions; used native ARM-compatible installers to prevent crashes.  
     - **Linux**: Adjusted file permissions for `/opt/lampp` to enable Apache and MySQL services.  

2. **Database Initialization**:  
   - Created `cisc332` database via phpMyAdmin’s SQL console:  
   ```sql  
   CREATE DATABASE cisc332;  
   ```  
   - Configured a dedicated MySQL user with restricted privileges for enhanced security:  
   ```sql  
   CREATE USER 'app_user'@'localhost' IDENTIFIED BY 'SecurePass123!';  
   GRANT SELECT, INSERT, UPDATE ON cisc332.* TO 'app_user'@'localhost';  
   ```  

3. **Web Server Validation**:  
   - Tested Apache by hosting a static `index.html` page in `htdocs`:  
   ```html  
   <!DOCTYPE html>  
   <html>  
       <head><title>Test</title></head>  
       <body><h1>Apache is running!</h1></body>  
   </html>  
   ```  
   - Verified accessibility via `http://localhost` and resolved port conflicts by modifying `httpd.conf` (e.g., switching from port `80` to `8080`).  

### **Challenges & Solutions**  
- **M1 Mac Compatibility**:  
  - **Issue**: ProFTPD service caused system crashes.  
  - **Resolution**: Disabled ProFTPD and used only Apache/MySQL.  
- **Permission Denied Errors**:  
  - **Issue**: Apache lacked write access to `htdocs`.  
  - **Resolution**: Adjusted folder permissions via `chmod -R 755 /opt/lampp/htdocs`.  

### **Outcome**  
- Fully operational local server environment with MySQL database connectivity.  
- Screenshots of `phpMyAdmin` and `Hello World` page submitted as proof of setup.  

---

## **Phase 2: Entity-Relationship (ER) Diagram Design**  
### **Objective**  
Model the **Conference Database** to encapsulate entities, relationships, and constraints based on real-world requirements.  

### **Outcome**  
- ER diagram in `.jpg` format, validated against project requirements.  
- Assumptions documented (e.g., "Sponsors are not automatically attendees").  

### ER Diagram

[ER Diagram (Project Part 1) - Corrected, modified version.pdf](https://github.com/user-attachments/files/19880506/ER.Diagram.Project.Part.1.-.Corrected.modified.version.pdf)

---

## **Phase 3: Relational Model & SQL Script Implementation**  
### **Objective**  
Translate the ER diagram into a normalized SQL schema and populate it with test data.  
    
### **Outcome**  
- SQL script (`conferenceDB.sql`) capable of recreating the database from scratch.  
- Test data ensuring all relationships and constraints functioned as intended.

### SQL Script

```sql
drop database if exists conferenceDB;
create database if not exists conferenceDB;
use conferenceDB;

create table attendee(
    id integer not null primary key,
    fName varchar(40),
    lName varchar(40),
    fee Enum("0", "50", "100"));

create table room (
    num integer not null primary key,
    numbed integer);

create table student(
    id integer not null primary key,
    roomNum integer not null,
    foreign key (id) references attendee (id) on delete cascade,
    foreign key (roomNum) references room(num));

create table professional(
    id integer not null primary key,
    foreign key (id) references attendee (id) on delete cascade);


create table speaker(
    id integer not null primary key,
    foreign key (id) references attendee (id) on delete cascade);

create table session(
    location integer not null,
    sessionDate date not null,
    startTime time not null,
    endTime time not null,
    speakerID integer not null,
    primary key(location, sessionDate, startTime),
    foreign key (speakerID) references speaker (id) on delete cascade);

create table company(
    name varchar(120) not null primary key,
    emailsSent integer,
    level Enum("Gold", "Bronze", "Platinum", "Silver"));

create table sponsor(
    id integer not null primary key,
    companyName varchar(120) not null,
    foreign key (id) references attendee (id) on delete cascade,
    foreign key (companyName) references company (name) on delete cascade);

create table jobAd(
    companyName varchar(120) not null,
    jobTitle varchar(250) not null,
    salary integer,
    location varchar(250),
    primary key (companyName, jobTitle),
    foreign key (companyName) references company (name) on delete cascade);


create table member(
    id integer not null primary key,
    fName varchar(120) not null,
    lName varchar(120) not null);


create table subcommittee(
    name varchar(120) not null primary key,
    chairID integer not null,
    foreign key (chairID) references member (id));

create table memberOf(
    id integer not null,
    subcommittee varchar(120) not null,
    foreign key (id) references member (id),
    foreign key (subcommittee) references subcommittee (name));

    


insert into attendee values
(1, 'Alice', 'King', '100'),
(2, 'Bob', 'Smith', '50'),
(3, 'Charlie', 'Williams', '0'),
(4, 'David', 'Lee', '100'),
(5, 'Eve', 'Brown', '50'),
(6, 'Frank', 'Davis', '0'),
(7, 'Grace', 'Miller', '100'),
(8, 'Hannah', 'Taylor', '50'),
(9, 'Olivia', 'Young', '0'),
(10, 'Lisa', 'Green', '50'),
(11, 'Kara', 'Thomas', '100'),
(12, 'Kelly', 'Kang', '0'),
(13, 'Douglas', 'Lopez', '50'),
(14, 'Noah', 'Green', '0'),
(15, 'Olivia', 'Hill', '100'),
(16, 'Paul', 'Adams', '50'),
(17, 'Quinn', 'Baker', '0'),
(18, 'Rachel', 'Carter', '100'),
(19, 'Samuel', 'Dave', '50'),
(20, 'Tom', 'Hall', '0'),
(21, 'Umi', 'Blake', '50'),
(22, 'Vanessa', 'Scott', '100'),
(23, 'Wendy', 'Masse', '0'),
(24, 'Xavier', 'Iris', '100');  


insert into room values
(101, 2),
(102, 3),
(103, 2),
(104, 1),
(105, 2),
(106, 3),
(107, 1),
(108, 2),
(109, 3);  




insert into student values
(1, 101),
(2, 101),
(3, 102),
(7, 102),
(8, 103),
(9, 103),
(13, 104),
(14, 105),
(16, 105),
(17, 106),
(19, 107),
(20, 106),
(21, 108),
(23, 109);  



insert into professional values
(4),
(5),
(10),
(12),
(15),
(18),
(22),
(24);


insert into speaker values
(8),
(13),
(16),
(19),
(23);




insert into session values
(201, '2025-05-01', '10:30:00', '12:30:00', 8),
(202, '2025-05-01', '12:00:00', '15:30:00', 8),
(203, '2025-05-02', '09:30:00', '11:30:00', 8),
(204, '2025-05-02', '13:00:00', '14:30:00', 13),
(205, '2025-05-01', '14:30:00', '17:30:00', 16),
(206, '2025-05-01', '17:00:00', '18:30:00', 19),
(207, '2025-05-02', '14:30:00', '16:30:00', 23),
(208, '2025-05-02', '16:30:00', '18:00:00', 16);


insert into company values
('Thompson LLC', 10, 'Gold'),
('Hammes, Littel and Schultz', 5, 'Silver'),
('Brekke LLC', 8, 'Platinum'),
('Donnelly Group', 3, 'Bronze'),
('Gibson LLC', 15, 'Gold'),
('Crist', 7, 'Gold'),
('Cloud AI', 4, 'Silver'),
('Wunsch', 12, 'Platinum'),
('EffertzCode', 0, 'Bronze'),
('AI Welch', 9, 'Gold');



insert into sponsor values
(4, 'Thompson LLC'),
(5, 'Hammes, Littel and Schultz'),
(10, 'Donnelly Group'),
(11, 'Gibson LLC'),
(13, 'Crist'),
(14, 'Cloud AI'),
(16, 'EffertzCode'),
(19, 'AI Welch');


insert into jobAd values
('Thompson LLC', 'Frontend Developer', 95000, 'Surrey'),
('Thompson LLC', 'ML Data Analyst', 80000, 'Halifax'),
('Brekke LLC', 'Product Designer', 75000, 'Seattle'),
('Hammes, Littel and Schultz', 'DevOps Engineer', 100000, 'New York City'),
('Donnelly Group', 'UI/UX Developer', 50000, 'Calgary'),
('Gibson LLC', 'AI Researcher', 625000, 'South Boston'),
('Crist', 'Backend Developer', 85000, 'Vancouver'),
('Cloud AI', 'Cloud Architect', 140000, 'Galena'),
('Wunsch', 'ML Engineer', 135000, 'San Francisco'),
('EffertzCode', 'Network Engineer', 65000, 'Toronto'),
('AI Welch', 'Software Developer', 90000, 'Dallas');



insert into member values
(1, 'Grace', 'Hoppi'),
(2, 'Alan', 'Turing'),
(3, 'Aidea', 'Lovlace'),
(4, 'Tim', 'Bay-Lee'),
(5, 'Marget', 'Hamilton'),
(6, 'Denny', 'Richie'),
(7, 'Barba', 'Niskovy'),
(8, 'Kenny', 'Thompson'),
(9, 'Brien', 'Kitchenville'),
(10, 'Linux', 'Toaldrus'),
(11, 'John', 'Backingham'),
(12, 'Franci', 'Allan');


insert into subcommittee values
('Event Planning and Logistics', 1),
('Finance', 2),
('Sponsorship', 3),
('Program', 4),
('IT Support and Web Development', 5),
('Marketing', 6),
('Registration', 7),
('Art Design', 8),
('Operations', 9);


insert into memberOf values
(1, 'Event Planning and Logistics'),
(2, 'Finance'),
(3, 'Sponsorship'),
(4, 'IT Support and Web Development'),
(3, 'Program'),
(3, 'Marketing'),
(4, 'Finance'),
(5, 'Registration'),
(5, 'Event Planning and Logistics'),
(6, 'Finance'),
(7, 'Marketing'),
(2, 'Sponsorship'),
(6, 'Art Design'),
(7, 'IT Support and Web Development'),
(8, 'IT Support and Web Development'),
(9, 'Operations'),
(9, 'Registration'),
(10, 'Marketing'),
(11, 'Art Design'),
(11, 'IT Support and Web Development'),
(12, 'Operations');

```


---

## **Phase 4: Web Application Development**  
### **Objective**  
Build a dynamic, database-driven web interface for conference organizers.  

### **Outcome**  
- **Web Application**:  
  - Multi-page interface with CRUD operations for all entities.  
- **Demo Video**:  
  - 5-minute walkthrough showing feature demonstrations and database interactions.  

 ---

This structured approach ensured rigorous testing at each phase, alignment with academic objectives, and delivery of a functional, scalable application.  



