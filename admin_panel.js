function addCourse() {
    var courseName = document.getElementById("course-name").value;
    if (courseName.trim() === "") {
        alert("Please enter a course name.");
        return;
    }
    // Here you can add code to send the course data to the server for processing (e.g., using AJAX).
    // After adding the course, you can display a success message or update the UI as needed.
    alert("Course added: " + courseName);
    document.getElementById("course-name").value = ""; // Clear input field
}

function addTeacher() {
    var teacherName = document.getElementById("teacher-name").value;
    if (teacherName.trim() === "") {
        alert("Please enter a teacher name.");
        return;
    }
    // Here you can add code to send the teacher data to the server for processing (e.g., using AJAX).
    // After adding the teacher, you can display a success message or update the UI as needed.
    alert("Teacher added: " + teacherName);
    document.getElementById("teacher-name").value = ""; // Clear input field
}

function addStudent() {
    var studentName = document.getElementById("student-name").value;
    if (studentName.trim() === "") {
        alert("Please enter a student name.");
        return;
    }
    // Here you can add code to send the student data to the server for processing (e.g., using AJAX).
    // After adding the student, you can display a success message or update the UI as needed.
    alert("Student added: " + studentName);
    document.getElementById("student-name").value = ""; // Clear input field
}
