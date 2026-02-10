# 🏢 HRMS - Human Resource Management System

A full-featured Human Resource Management System (HRMS) built using Laravel 12 with role-based authentication, hierarchical employee management, leave workflows, payroll structure, and project assignment modules.

---

## 🚀 Tech Stack

- **Backend:** Laravel 12
- **Authentication:** Laravel Breeze (Blade)
- **Database:** MySQL
- **Frontend:** Blade + TailwindCSS
- **Version Control:** Git & GitHub

---

## 🧱 Core Features Implemented

### 🔐 Authentication & Roles
- Role-based authentication system
- Admin middleware protection
- Role-based login redirection
- User ↔ Role relationship

### 👥 Employee Management
- Employee linked to User
- Department assignment
- Reporting Manager hierarchy
- Status tracking (Active / Resigned / Terminated)

### 🏢 Department Module
- Department creation
- Department-Employee relationship

### 📅 Attendance Module
- Daily attendance tracking
- Check-in / Check-out
- Status (Present / Absent / Half Day / Leave)

### 🌴 Leave Management
- Leave types
- Leave request system
- Multi-level leave approval
- Pending / Approved / Rejected tracking

### 💰 Payroll Module
- Monthly payroll structure
- Salary, bonus, deductions
- Unique monthly payroll per employee
- Payment status tracking

### 📁 Project Management
- Project creation
- Employee assignment
- TL / Member role in projects
- Assignment tracking

### 📊 Admin Dashboard
- Total Employees
- Total Departments
- Total Projects
- Pending Leave Requests
- Role-based dashboard access

---

## 🗂 Database Architecture

Key Tables:

- users
- roles
- departments
- employees
- attendance
- leave_types
- leave_requests
- leave_approvals
- payroll
- projects
- project_assignments

Relational structure follows proper foreign key constraints and normalization principles.

---

## 🛡 Security Implementation

- Mass assignment protection
- Middleware-based route protection
- Role-based access control
- Unique constraints to prevent duplication
- Proper database indexing

---

## 📌 Project Status

✅ Backend architecture completed  
✅ Database schema finalized  
✅ Role-based authentication working  
✅ Admin dashboard implemented  
🔄 UI/UX design in progress (Figma phase)  
🔜 CRUD operations and advanced reporting to be implemented  

---

## 🎯 Future Enhancements

- Employee CRUD management panel
- Leave approval interface
- Attendance UI module
- Payroll calculation automation
- Role permission matrix
- API integration (Laravel + React frontend)
- Reporting & analytics dashboard

---

## 🧠 What This Project Demonstrates

- Real-world HR system architecture
- Multi-module relational database design
- Middleware-based access control
- Scalable backend structure
- Clean Laravel project organization
- Git version control discipline

---

## 📬 Author

Balasaravanan S 
GitHub: https://github.com/Balasad

---

