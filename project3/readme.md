## Project Idea: **Inventory & Sales Management System**

A full-stack web app for small shops or boutiques to track products, sales, and customers.

###  Core Features
- **Authentication**
    - Admin login (username/password with hashing)
    - Role-based access (Admin vs Cashier)
- **Product Management**
    - Add, edit, delete products
    - Upload product images
    - Track stock quantity
- **Sales Module**
    - Cashier can create invoices
    - Auto stock deduction after sale
    - Print receipt (HTML → PDF)
- **Customer Management**
    - Add customers
    - View purchase history
- **Reports**
    - Daily/Monthly sales report
    - Low-stock alerts
- **Dashboard**
    - Graphs (using Chart.js) for sales trends
    - Quick stats (total products, total sales, revenue)

---

### Database (MariaDB)
**products**
- id
- name
- price
- stock
- image

**customers**
- id
- name
- phone
- email

**sales**
- id
- customer_id
- total_amount
- date

**sale_items**
- id
- sale_id
- product_id
- quantity
- price

**users**
- id
- username
- password (hashed)
- role (admin/cashier)

---

### Tech Stack
- **Frontend:** HTML + CSS (Bootstrap for styling), JavaScript (Chart.js for graphs)
- **Backend:** PHP (OOP + PDO for DB connection)
- **Database:** MariaDB
- **Extras:** FPDF or DomPDF for invoice printing
