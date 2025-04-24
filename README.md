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
├── conference.php              # Home page / main menu
├── conferencedb.sql
├── connectdb.php               # Database connection (PDO)
├── getdata.php                 # Ignore this file
├── includes/
│   ├── header.php              # Common header (styles, nav)
│   ├── footer.php              # Common footer
│   ├── styles.css              # Styling
│   └── helper_functions.php    # Reusable formatting functions
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
└── images/
    └── conferencelogo.png      # Conference logo 
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

### **Core Entities & Relationships**  
1. **Entities**:  
   - **Committees**: Sub-committees (e.g., "Program Committee") with attributes: `committee_id`, `name`, `chair_id`.  
   - **Attendees**: Categorized into subtypes:  
     - **Students**: Linked to `room_number` and `hotel_id`.  
     - **Professionals**: Tracked registration fees.  
     - **Sponsors**: Associated with a `company_id`.  
   - **SponsorCompanies**: Attributes included `tier` (Platinum/Gold/Silver/Bronze) and `email_quota`.  

2. **Relationships**:  
   - **1:1**: Each committee has one `chair` (a committee member).  
   - **1:N**: SponsorCompanies to SponsorAttendees (one company, multiple representatives).  
   - **N:M**: Students to Rooms via associative entity `RoomAssignment`.  

3. **Constraints**:  
   - **Participation**: All students *may* have a room (partial participation).  
   - **Cardinality**: Sessions have *at least one* speaker (mandatory participation).  

### **Design Decisions**  
- **Weak Entities**:  
  - **Rooms**: Dependent on `Hotel` entity; composite primary key (`room_number`, `hotel_id`).  
- **Generalization/Specialization**:  
  - **Attendee** supertype with subtypes `Student`, `Professional`, `Sponsor` to reduce redundancy.  

### **Challenges & Solutions**  
- **Overlapping Roles**:  
  - **Issue**: A speaker could also be an attendee.  
  - **Resolution**: Created separate `Speaker` entity linked to `Attendee` via foreign key.  
- **Composite Attributes**:  
  - **Issue**: Addresses (city, province) for jobs.  
  - **Resolution**: Stored as atomic attributes in `Job` entity.  

### **Outcome**  
- ER diagram in `.jpg` format, validated against project requirements.  
- Assumptions documented (e.g., "Sponsors are not automatically attendees").  

---

## **Phase 3: Relational Model & SQL Script Implementation**  
### **Objective**  
Translate the ER diagram into a normalized SQL schema and populate it with test data.  

### **Schema Design**  
1. **Table Creation**:  
   - **Committees**:  
     ```sql  
     CREATE TABLE Committees (  
       committee_id INT PRIMARY KEY AUTO_INCREMENT,  
       name VARCHAR(50) NOT NULL,  
       chair_id INT NOT NULL,  
       FOREIGN KEY (chair_id) REFERENCES Members(member_id)  
     );  
     ```  
   - **Rooms (Weak Entity)**:  
     ```sql  
     CREATE TABLE Rooms (  
       room_number INT,  
       hotel_id INT,  
       beds INT NOT NULL CHECK (beds IN (1, 2)),  
       PRIMARY KEY (room_number, hotel_id),  
       FOREIGN KEY (hotel_id) REFERENCES Hotels(hotel_id)  
     );  
     ```  

2. **Subtype Handling**:  
   - **Single Table Inheritance**:  
     ```sql  
     CREATE TABLE Attendees (  
       attendee_id INT PRIMARY KEY,  
       type ENUM('student', 'professional', 'sponsor') NOT NULL,  
       registration_fee DECIMAL(10,2),  
       -- Student-specific  
       room_number INT,  
       hotel_id INT,  
       -- Sponsor-specific  
       company_id INT,  
       FOREIGN KEY (room_number, hotel_id) REFERENCES Rooms(room_number, hotel_id),  
       FOREIGN KEY (company_id) REFERENCES SponsorCompanies(company_id)  
     );  
     ```  

### **Data Population**  
- Inserted **8–10 records per table** for testing:  
  - **SponsorCompanies**:  
    ```sql  
    INSERT INTO SponsorCompanies (company_name, tier)  
    VALUES ('Tech Corp', 'Platinum'), ('Design Studio', 'Gold');  
    ```  
  - **Rooms**:  
    ```sql  
    INSERT INTO Rooms (room_number, hotel_id, beds)  
    VALUES (101, 1, 2), (205, 1, 1);  
    ```  

### **Challenges & Solutions**  
- **Referential Integrity**:  
  - **Issue**: Circular dependencies between `Committees` and `Members`.  
  - **Resolution**: Temporarily disabled foreign key checks during initial inserts.  
- **Data Validation**:  
  - **Triggers**: Enforced email quotas based on sponsorship tier using `BEFORE UPDATE` triggers.  

### **Outcome**  
- SQL script (`conferenceDB.sql`) capable of recreating the database from scratch.  
- Test data ensuring all relationships and constraints functioned as intended.  

---

## **Phase 4: Web Application Development**  
### **Objective**  
Build a dynamic, database-driven web interface for conference organizers.  

### **Tech Stack**  
- **Frontend**: HTML5, CSS3 (Bootstrap for styling), vanilla JavaScript.  
- **Backend**: PHP 8.1 with PDO for MySQL connectivity.  
- **Database**: MySQL 8.0 hosted locally via XAMPP.  

### **Core Features**  
1. **Committee Management**:  
   - **Dropdown Lists**: Dynamically populated committees from the database.  
   - **Chair Assignment**: Form to update a committee’s chair via `UPDATE` queries.  

2. **Room Assignments**:  
   - **Search Interface**: Filter rooms by hotel or bed count.  
   - **Student List**: Displayed via `JOIN` between `Attendees` and `Rooms`.  

3. **Sponsorship Dashboard**:  
   - **Tier-Based Styling**: Platinum sponsors highlighted in blue, Gold in yellow.  
   - **Email Tracking**: Progress bars showing `emails_sent` vs. `email_quota`.  

4. **Session Scheduling**:  
   - **Conflict Detection**: Prevented double-booking rooms using `UNIQUE` constraints on `room` and `time_slot`.  

### **Security & Validation**  
1. **Input Sanitization**:  
   - **Prepared Statements**:  
     ```php  
     $stmt = $pdo->prepare("INSERT INTO Attendees (name, type) VALUES (?, ?)");  
     $stmt->execute([$_POST['name'], $_POST['type']]);  
     ```  
2. **Session Management**:  
   - **Authentication**:  
     ```php  
     session_start();  
     if (!isset($_SESSION['user_id'])) {  
       header("Location: /login.php");  
       exit();  
     }  
     ```  

### **Challenges & Solutions**  
- **Dynamic Query Building**:  
  - **Issue**: Flexible search filters for sessions (date, room, speaker).  
  - **Resolution**: Constructed SQL queries with optional `WHERE` clauses using parameter binding.  
- **File Organization**:  
  - **Issue**: Scalability with growing features.  
  - **Resolution**: Adopted MVC-like structure:  
    ```  
    /models   → Database operations  
    /views    → HTML templates  
    /controllers → Form handlers  
    ```  

### **Outcome**  
- **Web Application**:  
  - Multi-page interface with CRUD operations for all entities.  
  - Responsive design via Bootstrap for mobile compatibility.  
- **Demo Video**:  
  - 5-minute walkthrough showing feature demonstrations and database interactions.  

---

## **Course Learning Outcomes (CLOs)**  
- **CLO1**: Mastered database design via ER modeling and normalization.  
- **CLO4**: Developed secure, full-stack applications integrating PHP, MySQL, and modern web standards.  

This structured approach ensured rigorous testing at each phase, alignment with academic objectives, and delivery of a functional, scalable application.  



