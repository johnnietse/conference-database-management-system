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
