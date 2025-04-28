<?php include('../templates/header.php'); ?>

<link rel="stylesheet" href="/CRUD-students/styles/styles.css?version=1.0">

<div class="cour-container">
  <div class="cour-panel">
    <form action="" method="post">
      <div class="cour-panel-title">
      Student control panel
      </div>
      <div>
        <div class="cour-field">
          <label for="id" class="cour-lbl">Student ID</label>
          <input 
          type="text"
          class="cour-input"
          name="id"
          id="id"
          placeholder="ID">
        </div>
        <div class="cour-field">
          <label for="student_name" class="cour-lbl">Student name</label>
          <input 
          type="text"
          class="cour-input"
          name="student_name"
          id="student_name"
          placeholder="Student name">
        </div>
        <div class="cour-field">
          <label for="course_name" class="cour-lbl">Course name</label>
          <input 
          type="text"
          class="cour-input"
          name="course_name"
          id="course_name"
          placeholder="Course name">
        </div>
        <div class="cour-btn">
          <button type="button" class="cour-btn-add">Add</button>
          <button type="button" class="cour-btn-edit">Edit</button>
          <button type="button" class="cour-btn-del">Delete</button>
        </div>
      </div>
    </form>
  </div>

  <div class="cour-tab-container">
    <div class="cour-tab">
      <table>
        <thead class="cour-title-tab">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Courses</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="cour-separator">
            <td colspan="4"><hr></td>
          </tr>
          <tr class="cour-content-tab">
            <td>1</td>
            <td>Student 1</td>
            <td>Course 1</td>
            <td>Select</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include('../templates/footer.php'); ?>