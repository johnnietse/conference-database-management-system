# 🎓 Conference Management System

Welcome to the **Conference Management System** — a web-based tool developed using **PHP**, **HTML**, **CSS**, and **MySQL**, intended for internal use by **conference organizers**. This platform enables administrators to manage attendees, sponsors, job postings, session schedules, and finances efficiently via a clean and structured interface.

---

## 🌐 Project Overview

This application is a complete end-to-end system for managing university conference data. The primary focus is on **functionality, accessibility, and database interaction**, using **PDO (PHP Data Objects)** for robust, secure, and DBMS-agnostic operations.

Unlike flashy public-facing sites, this organizer-only tool emphasizes clarity and completeness of core conference operations. All data-driven content is rendered dynamically through PHP modules.

---

## 📁 File Structure

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



<pre> ```bash ## 📁 File Structure conference_management_system/ ├── conference.php # Home page / main menu ├── conferencedb.sql ├── connectdb.php # Database connection (PDO) ├── getdata.php # Ignore this file ├── includes/ │ ├── header.php # Common header (styles, nav) │ ├── footer.php # Common footer │ ├── styles.css # Styling │ └── helper_functions.php # Reusable formatting functions ├── modules/ # All feature modules (dynamic content) │ ├── add_new_attendee.php │ ├── all_available_jobs.php │ ├── company_jobs.php │ ├── conference_daily_schedule.php │ ├── conference_financials.php │ ├── hotel_rooming.php │ ├── list_of_attendees.php │ ├── list_of_sponsors.php │ ├── session_details_management.php │ ├── sponsorship_companies_management.php │ └── sub_committee_members.php └── images/ └── conferencelogo.png # Conference logo ``` </pre>

---

## ⚙️ Technologies Used

- **PHP 7+** – Backend logic and dynamic content generation
- **PDO (PHP Data Objects)** – Secure, DBMS-independent database interaction
- **MySQL (or compatible DBMS)** – Data storage and querying
- **HTML5/CSS3** – Structure and styling
- **Vanilla JavaScript** – Form interactivity (e.g., conditional fields)

---

## 🚀 Features

The application supports all the following functionalities:

### 👥 Attendee Management

- Add a new attendee (student, professional, sponsor)
  - Students are assigned to a hotel room
  - Sponsors are linked to a company
- View all attendees organized by type:
  - Students
  - Professionals
  - Sponsors

### 🏨 Hotel Room Viewer

- Select a room from a dropdown to view all students assigned to that room

### 🧑‍💼 Sub-Committee Viewer

- Choose a sub-committee and list all its members

### 📆 Conference Schedule

- Select a day to view all scheduled sessions with:
  - Time
  - Location
  - Speaker details

### 💼 Job Postings

- View all available jobs sorted by sponsorship level and salary
- Filter job listings by sponsoring company

### 🏢 Sponsor Management

- View all sponsors with their level and number of attendees
- Add a new sponsor company
- Delete an existing company (and cascade delete attendees from that sponsor)

### 💰 Financial Report

- Display total revenue breakdown:
  - From registration fees
  - From sponsorship contributions
- Summarized in clearly formatted tables

### 🔁 Session Editing

- Switch a session’s:
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
-- setup_conferenceDB.sql
DROP DATABASE IF EXISTS conferenceDB;
CREATE DATABASE conferenceDB;
USE conferenceDB;

-- Followed by table creation and data inserts...
You can run this in tools like phpMyAdmin, MySQL CLI, or DBeaver.

### 3. Configure Your Environment
Ensure the database credentials in connectdb.php match your local setup:
```php
$connection = new PDO('mysql:host=localhost;port=3308;dbname=conferenceDB', 'root', '');
```

### 4. Access the Application
```bash
Navigate to: http://localhost:PORT/conference_management_system/conference.php
```
(Replace PORT with your configured port, like 8080 or 3308.)







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
