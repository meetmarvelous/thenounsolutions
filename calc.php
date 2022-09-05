<?php
include "include/dbcon.php";
session_start();

$collect = mysqli_query($con, "SELECT * FROM site_info where site_id='1' ");
$site = mysqli_fetch_array($collect);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $site['webname']; ?></title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Marvelbyte">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">

  <!-- FontAwesome JS-->
  <script defer src="assets/fontawesome/js/all.min.js"></script>

  <!-- Theme CSS -->
  <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <link id="theme-style" rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" href="assets/css/search.css">
  <link rel="stylesheet" href="assets/css/calc.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />

</head>

<body>



  <?php
  include "nav.php";
  ?>


  <div class="row">
    <div class="col-md-12">
      <div class="container calc">

        <div class="calculator-box">
          <h1>CGPA CALCULATOR</h1>
          <p>
            This CGPA Calculator is based on the Nigerian University grading
            system.
          </p>

          <div id="course-wrapper">
            <form class="key-0">
              <p> <label id="course-row" for="courses">Courses:</label>
                <label id="credit-row" for="credit-units">Credit Units:</label>
                <label id="grade-row" for="grade">Grades: </label>
              </p>
              <input type="text" placeholder="Course Code" class="courses key-0" required />
              <!--               <label for="credit-units">Credit Units:</label> -->
              <input type="number" class="credit-units key-0" placeholder="Credit Units" value="" required />
              <!--               <label for="grade">Grade: </label> -->
              <select class="grade key-0" required>
                <option class="grade" value="select">Select</option>
                <option class="grade" value="5">A</option>
                <option class="grade" value="4">B</option>
                <option class="grade" value="3">C</option>
                <option class="grade" value="2">D</option>
                <option class="grade" value="1">E</option>
                <option class="grade" value="0">F</option>
              </select>
            </form>
          </div>
          <!-- <section class"btn">+ Add Course</section> -->
          <div class="btn">
            <button onclick="addCourse()">+ Add Course</button>
            <button onclick="removeCourse()">- Remove Course</button>
            <button onclick="calcCgpa()">Calculate CGPA</button>
          </div>
          <div class="lastp">
            <p id="cgpa-calc">Your CGPA is:</p>
          </div>
        </div>

      </div>
    </div>
  </div>


  <script>
    function gradeCalc(grade, unit) {
      if (grade === "A") {
        return 5 * unit;
      } else if (grade === "B") {
        return 4 * unit;
      } else if (grade === "C") {
        return 3 * unit;
      } else if (grade === "D") {
        return 2 * unit;
      } else if (grade === "E") {
        return 1 * unit;
      } else if (grade === "F") {
        return 0 * unit;
      }
    }

    let counter = 1;

    function addCourse() {
      let addNew = document.createElement("form");
      addNew.classList.add("add_new", `key-${counter}`);
      const course_name = `
  <form class="add_new key-${counter}">
    <input type="text" placeholder="Course Code" class="courses key-${counter}" required>
        <input type="number" placeholder="Credit Unit" class="credit-units key-${counter}" required>
        <select class="grade key-${counter}" required>
      <option value="select">Select</option>
      <option value="5">A</option>
      <option value="4">B</option>
      <option value="3">C</option>
      <option value="2">D</option>
      <option value="1">E</option>
      <option value="0">F</option>
    </select>  
  </form>
  `;
      addNew.innerHTML = course_name;
      document.getElementById("course-wrapper").appendChild(addNew);
      counter++;
    }

    function removeCourse() {
      let mainForm = document.querySelector("form.add_new");
      mainForm.remove();
    }

    const reports = [];

    /**
     * @description calculates cgpa
     */
    function calcCgpa() {
      const CGPAPARAGRAPH = document.getElementById("cgpa-calc");
      const GRADESSELECT = document.querySelectorAll("select.grade");
      const UNIT = document.querySelectorAll("input.credit-units");

      const courseReport = {};

      const listOfGrades = [];
      const listOfUnits = [];
      let totalUnits = 0;

      GRADESSELECT.forEach((e) => {
        let GRADES = e.options;
        const selectedIndex = e.selectedIndex;
        const selectedGrade = GRADES[selectedIndex];
        const gradeValue = selectedGrade.text.toUpperCase();
        listOfGrades.push(gradeValue);
      });
      console.log(listOfGrades);

      UNIT.forEach((e) => {
        const unitValue = parseInt(e.value);
        totalUnits += unitValue;
        listOfUnits.push(unitValue);
      });
      console.log(listOfUnits);

      let totalEarnedUnits = 0;

      for (let i = 0; i < listOfUnits.length; i++) {
        totalEarnedUnits += gradeCalc(listOfGrades[i], listOfUnits[i]);
      }
      const gpa = totalEarnedUnits / totalUnits;

      if (gpa >= 0) {
        CGPAPARAGRAPH.textContent = "Your CGPA is " + gpa.toFixed(2);
      } else {
        CGPAPARAGRAPH.textContent = "Please enter your correct grade and credit units";
      }

    }
  </script>
  <?php
  include "footer.php";
  ?>