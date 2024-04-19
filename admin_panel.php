<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <div id="course-form">
            <h2>Add Course</h2>
            <input type="text" id="course-name" placeholder="Course Name">
            <button onclick="addCourse()">Add Course</button>
        </div>
        <div id="teacher-form">
            <h2>Add Teacher</h2>
            <input type="text" id="teacher-name" placeholder="Teacher Name">
            <button onclick="addTeacher()">Add Teacher</button>
        </div>
        <div id="student-form">
            <h2>Add Student</h2>
            <input type="text" id="student-name" placeholder="Student Name">
            <button onclick="addStudent()">Add Student</button>
        </div>
    </div>
    <script src="admin_panel.js"></script>
</body>
</html>
