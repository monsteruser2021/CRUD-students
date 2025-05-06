<?php include('../templates/header.php'); ?>
<?php include('../sections/courses.php'); ?>

<link rel="stylesheet" href="/CRUD-students/styles/styles.css?version=1.0">

<div class="cour-container">
  <div class="cour-panel">
    <form action="" method="post">
      <div class="cour-panel-title">
        Course control panel
      </div>
      <div>
        <div class="cour-field">
          <label for="id" class="cour-lbl">Course ID</label>
          <input 
          type="text"
          class="cour-input"
          name="id"
          id="id"
          value="<?php echo $id; ?>"
          placeholder="ID">
        </div>
        <div class="cour-field">
          <label for="course_name" class="cour-lbl">Course name</label>
          <input 
          type="text"
          class="cour-input"
          name="course_name"
          id="course_name"
          value="<?php echo $course_name; ?>"
          placeholder="Course name">
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
          <?php foreach($coursesList as $course){?>
            <tr class="cour-content-tab">
              <td> <?php echo $course['id']; ?> </td>
              <td> <?php echo $course['course_name']; ?> </td>
              <td>
                <form action="" method="post">
                  <input type="hidden" name="id" id="id" value="<?php echo $course['id']; ?>">
                  <input type="submit" value="select" name="action" class="">
                </form>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include('../templates/footer.php'); ?>