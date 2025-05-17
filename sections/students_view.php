<?php include('../templates/header.php'); ?>
<?php include('../sections/students.php'); ?>

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
          <label for="last_names" class="cour-lbl">Student last names</label>
          <input 
          type="text"
          class="cour-input"
          name="last_names"
          id="last_names"
          placeholder="last last names">
        </div>
        <div class="cour-field">
          <label for="" class="cour-lbl">Courses</label>
          <select multiple name="courses[]" class="cour-input" id="$coursesList">
            <option value="">Select an option</option>
            <option value="">Course 1</option>
            <option value=""> Course 2</option>
          </select>
        </div>
        <div class="cour-btn">
          <button type="submit" name="action" value="add" class="cour-btn-add">Add</button>
          <button type="submit" name="action" value="edit" class="cour-btn-edit">Edit</button>
          <button type="submit" name="action" value="delete" class="cour-btn-del">Delete</button>
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
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="cour-separator">
            <td colspan="3"><hr></td>
          </tr>
          <?php foreach ($students as $student):?>
            <tr class="cour-content-tab">
              <td><?php echo $student['id']; ?></td>
              <td><?php echo $student['names']; ?> <?php echo $student['last_names']; ?></td>
              <td>Select</td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include('../templates/footer.php'); ?>