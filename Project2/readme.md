#  **Vehicle Management System — Project Explanation for Students**

## **Project Goal**
This project teaches students how to build a **real-world management system** using:

- **PHP** (backend logic)
- **MariaDB** (database)
- **HTML/CSS** (frontend)
- **CRUD operations** (Create, Read, Update, Delete)
- **Authentication** (Admin login)
- **Relational database design** (multiple tables working together)

The system manages **vehicles**, **drivers**, and **assignments**.

---

#  **What the System Does**

### **Admin Login System**
Only authorized users can access the dashboard.

Students learn:
- How to create a login form
- How to verify passwords securely
- How to use PHP sessions to protect pages

---

### **Admin Dashboard**
After logging in, the admin sees a dashboard with links to:

- Manage Vehicles
- Assign Drivers
- Logout

Students learn:
- How to build a simple dashboard
- How to protect pages using `auth_admin.php`

---

### **Vehicle Management**
Admins can:

- Add new vehicles
- Edit vehicle details
- Delete vehicles
- View all vehicles in a table

Each vehicle has:
- Plate number
- Model
- Status (Active, In Repair, etc.)

Students learn:
- How to insert data into a database
- How to fetch and display data
- How to update and delete records
- How to validate unique fields (like plate numbers)

---

###  **Driver Assignment**
Admins can assign a driver to a vehicle.

Students learn:
- How to use dropdowns populated from the database
- How to create relationships between tables
- How to use JOIN queries to display combined data

Example:
- Vehicle: **RAB 123A – Toyota Hilux**
- Driver: **John Driver**
- Assigned at: **2026-04-28 10:30:00**

---

#  **Database Structure (MariaDB)**

The system uses **four tables**:

### ✔ `admins`
Stores login credentials.

### ✔ `drivers`
Stores driver names and phone numbers.

### ✔ `vehicles`
Stores vehicle details.

### ✔ `vehicle_assignments`
Links drivers to vehicles.

Students learn:
- Primary keys
- Foreign keys
- One-to-many relationships
- Data integrity

---

#  **Skills Students Will Learn**

### 🔹 Backend (PHP)
- Form handling
- Sessions
- Redirects
- CRUD operations
- SQL queries
- Security basics

### 🔹 Database (MariaDB)
- Designing tables
- Using foreign keys
- Writing JOIN queries
- Preventing duplicate entries

### 🔹 Frontend (HTML/CSS)
- Building forms
- Creating tables
- Styling pages
- Making a clean admin UI

---

# **Real-World Applications**
This project is similar to systems used by:

- Transport companies
- Delivery services
- Car rental agencies
- Government fleet management
- Logistics companies

Students see how their code solves real problems.