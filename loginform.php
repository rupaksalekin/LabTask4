<?php
echo "Hello World";?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Design</title>
  </head>
  <body>
    <form>
      <fieldset>
        <legend>Employees Name</legend>
        <h3>FirstName</h3>
        <input type="text" name="FirstName" value="">
        <h3>LastName</h3>
        <input type="text" name="LastName" value="">

        <h3>Employees Hire Date</h3>
        <input type="date" name="Date" value="">

        <h3>Employees Title</h3>
        <input type="text" name="Title" value="">

        <h3>Employees Department</h3>
        <select class="" name="Departments" size="2">
          <option value="">Marketing</option>
          <option value="">Human Resource</option>
          <option value="">Accounting</option>
          <option value="">Manufacturing</option>
          <option value="">Management</option>
          <option value="">Board</option>
        </select>

        <h3>Performance Evaluation</h3>
        <table border="2">
          <tr>
            <th></th>
            <th>Very Good</th>
            <th>Good</th>
            <th>Fair</th>
            <th>Poor</th>
            <th>Very Poor</th>
          </tr>
          <tr>
            <td>Attendance</td>
            <td> <input type="radio" name="1" value="1"> </td>
            <td> <input type="radio" name="1" value="1"> </td>
            <td> <input type="radio" name="1" value="1"> </td>
            <td> <input type="radio" name="1" value="1"> </td>
            <td> <input type="radio" name="1" value="1"> </td>

          </tr>
          <tr>
            <td>Quality Of Work</td>
            <td> <input type="radio" name="2" value="2"> </td>
            <td> <input type="radio" name="2" value="2"> </td>
            <td> <input type="radio" name="2" value="2"> </td>
            <td> <input type="radio" name="2" value="2"> </td>
            <td> <input type="radio" name="2" value="2"> </td>
          </tr>
          <tr>
            <td>Quatity Of Work</td>
            <td> <input type="radio" name="3" value="3"> </td>
            <td> <input type="radio" name="3" value="3"> </td>
            <td> <input type="radio" name="3" value="3"> </td>
            <td> <input type="radio" name="3" value="3"> </td>
            <td> <input type="radio" name="3" value="3"> </td>
          </tr>
          <tr>
            <td>Attitude</td>
            <td> <input type="radio" name="4" value="4"> </td>
            <td> <input type="radio" name="4" value="4"> </td>
            <td> <input type="radio" name="4" value="4"> </td>
            <td> <input type="radio" name="4" value="4"> </td>
            <td> <input type="radio" name="4" value="4"> </td>
          </tr>
          <tr>
            <td>Dependability</td>
            <td> <input type="radio" name="5" value="5"> </td>
            <td> <input type="radio" name="5" value="5"> </td>
            <td> <input type="radio" name="5" value="5"> </td>
            <td> <input type="radio" name="5" value="5"> </td>
            <td> <input type="radio" name="5" value="5"> </td>
          </tr>
          <tr>
            <td>Work ethic</td>
            <td> <input type="radio" name="6" value="6"> </td>
            <td> <input type="radio" name="6" value="6"> </td>
            <td> <input type="radio" name="6" value="6"> </td>
            <td> <input type="radio" name="6" value="6"> </td>
            <td> <input type="radio" name="6" value="6"> </td>
          </tr>
        </table>

        <h4>Overall, I would rank this employee's performance as:</h4>
        <input type="radio" name="7" value="">Very Good
        <input type="radio" name="7" value="">Good
        <input type="radio" name="7" value="">Fair
        <input type="radio" name="7" value="">Poor
        <input type="radio" name="7" value="">Very Poor

        <h3>Please go into more detail on why you chose this ranking.</h3>
        <textarea name="name" rows="8" cols="80"></textarea>

        <h3>Supervisor's Name</h3>

        <h4>FirstName</h4>
        <input type="text" name="supName" value="">

        <h4>LastName</h4>
        <input type="text" name="SupName" value="">

        <h3>Supervisors Signature</h3>
        <textarea name="name" rows="8" cols="80"></textarea>

        <button type="button" name="button">Clear</button>

        <h4>Use your mouse or figure to draw your signature above.</h4>

      </fieldset>


    </form>


  </body>
</html>
