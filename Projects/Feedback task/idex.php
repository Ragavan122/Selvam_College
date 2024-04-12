
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <script src="select.js"> </script> -->
</head>

<body>
    <form class="container" id="feedbackForm"method="POST"action="run.php">

        <div class="row">

            <!-- 1.faculty name-->
            <div class="col">
                <label class="form-label mt-3">Faculty Name</label>
                <select name="FIELDNAME_1" class="form-control" class="form-select" aria-label="Default select example"
                    onClick="errRemove1()" id="facultyname">
                    <option value="">- select faculty name -</option>
                    <option value="Sundari">Sundari</option>
                    <option value="Swetha">Swetha</option>
                    <option value="Senthil Kumar">Senthil Kumar</option>
                    <option value="Kirubakaran">Kirubakaran</option>
                    <option value="Mangaleshwari">Mangaleshwari</option>

                </select>
                <div class="dderror_1"> </div>
            </div>


            <!-- 2.Department name-->
            <div class="col">
                <label class="form-label mt-3 ">Department Name</label>
                <select name="FIELDNAME_2" class="form-control col" class="form-select"
                    aria-label="Default select example" onClick="errRemove1()" id="departmentname">
                    <option value="">- select your department -</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                    <option value="MECH">MECH</option>
                    <option value="CSE">CSE</option>
                    <option value="ISDTP">ISDTP</option>
                </select>
                <div class="dderror_2"> </div>
            </div>

            <!-- 3.College name-->
            <div class="col">
                <label class="form-label mt-3 ">College Name</label>
                <select name="FIELDNAME_3" class="form-control" class="form-select" aria-label="Default select example"
                    onClick="errRemove1()" id="collegename">
                    <option value="">- select your college -</option>
                    <option value="Selvam College of Engineering and Technology">Selvam College of Technology</option>
                    <option value="Selvam College of Arts and Science">Selvam College of Arts and Science</option>
                    <option value="Selvam College  of  Physical Education">Selvam College of Physical Education</option>
                    <option value="Shree Amirtha college of Education">Shree Amirtha college of Education</option>

                </select>
                <div class="dderror_3"> </div>
            </div>
        </div>

        <!-- 4.Course title-->
        <div class="row">

            <div class="col">
                <label class="form-label mt-3 col">Course Title</label>
                <select name="FIELDNAME_4" class="form-control" class="form-select" aria-label="Default select example"
                    onClick="errRemove1()" id="coursetitle">
                    <option value="">- select course-</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Soft Skills">Soft Skills</option>
                    <option value="Networking">Networking</option>
                    <option value="Competitive Examination">Competitive Examination</option>
                    <option value="Communicative English">Communicative English</option>
                </select>
                <div class="dderror_4"> </div>
            </div>

            <!--5. Course code-->
            <div class="col">
                <label class="form-label mt-3 col">Course code</label>
                <select name="FIELDNAME_5" class="form-control" class="form-select" id="coursecode"
                    aria-label="Default select example" onClick="errRemove1()">
                    <option value="">- select course code-</option>
                    <option value="123_Web Development">123_Web Development</option>
                    <option value="456_Soft Skills">456_Soft Skills</option>
                    <option value="789_Networking">789_Networking</option>
                    <option value="010_Competitive Examination">010_Competitive Examination</option>
                    <option value="951_Communicative English">951_Communicative English</option>
                </select>
                <div class="dderror_5"> </div>
            </div>

            <!--6. Student email-->
            <div class="col">
                <label for="studentemail" class="form-label mt-3 col">Email address</label>
                <input type="email" class="form-control" name="FIELDNAME_6" id="studentemail"
                    aria-describedby="emailHelp" autocomplete="off" onClick="errRemove1()">
                <div class="dderror_6"> </div>
            </div>


        </div><br>
        <hr>

        <div class="container mt-5">
            <table class="table table-bordered form-table">
                <thead>
                    <tr>
                        <th scope="col">Sr no</th>
                        <th scope="col">Areas</th>
                        <th scope="col">Marginal</th>
                        <th scope="col">Satisfactory</th>
                        <th scope="col">Good</th>
                        <th scope="col">Very Good</th>
                        <th scope="col">Excellent</th>

                    </tr>
                </thead>

                <tbody class="star-rating">
                    <tr>
                        <td scope="col">1</td>
                        <td scope="col">ORAL COMMUNICATION AND<BR>PRESENTATION SKILL<div id="validation_1"></div></td>
                        <td scope="col"><input type="radio" id="marginal_1"name="fiq" class="radio_1" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_1" name="fiq" class="radio_1" value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_1" name="fiq" class="radio_1" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_1" name="fiq" class="radio_1" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_1" name="fiq" class="radio_1" value="5"onclick="errorRemove()"></td>

                    </tr>
                    <tr>
                        <td scope="col">2</td>
                        <td scope="col">USE OF AUDIOVISUAL AIDS AVAILABILITY<BR>AND PROBLEM SOLVING THROUGH EXAMPLE <div id="validation_2"></div></td>
                        <td scope="col"><input type="radio" id="marginal_2"name="seq" class="radio_2" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_2" name="seq" class="radio_2" value="2"onclick="errorRemove()"> </td>
                        <td scope="col"><input type="radio" id="good_2" name="seq" class="radio_2"  value="3" onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_2" name="seq" class="radio_2" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_2" name="seq" class="radio_2" value="5"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">3</td>
                        <td scope="col">DEPTH OF DISCUSSION AND PROBLEM <BR>SOLVING THROUGH EXAMPLE <div id="validation_3"></div></td>
                        <td scope="col"><input type="radio" id="marginal_3" name="thq" class="radio_3"  value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_3" name="thq" class="radio_3" value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_3" name="thq" class="radio_3" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_3"name="thq" class="radio_3" value="4" onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_3"name="thq" class="radio_3" value="5"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">4</td>
                        <td scope="col">CLASS INTERACTION AND PARTICIPATION <div id="validation_4"></div></td>
                        <td scope="col"><input type="radio" id="marginal_4" name="foq" class="radio_4" value="1" onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_4" name="foq"class="radio_4"value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_4"name="foq" class="radio_4"  value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_4" name="foq" class="radio_4"  value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_4" name="foq"class="radio_4" value="4"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">5</td>
                        <td scope="col">COURSE CONTENT ENHANCEMENT AND<BR>COVERAGE <div id="validation_5"></div></td>
                        <td scope="col"><input type="radio" id="marginal_5" name="fivq"class="radio_5" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_5" name="fivq"class="radio_5" value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_5"      name="fivq"class="radio_5" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_5" name="fivq"class="radio_5" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_5" name="fivq"class="radio_5" value="5"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">6</td>
                        <td scope="col">OUT OF CLASS CONSULTATION <div id="validation_6"></div> </td>
                        <td scope="col"><input type="radio" id="marginal_6" name="siq"class="radio_6" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_6" name="siq"class="radio_6" value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_6" name="siq"class="radio_6" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_6" name="siq"class="radio_6" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_6" name="siq"class="radio_6" value="5"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">7</td>
                        <td scope="col">FAIR EVALUATION OF TESTS AND <BR>ASSIGNMENTS <div id="validation_7"></div></td>
                        <td scope="col"><input type="radio" id="marginal_7" name="sevq"class="radio_7" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_7" name="sevq"class="radio_7" value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_7" name="sevq"class="radio_7" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_7" name="sevq"class="radio_7" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_7" name="sevq"class="radio_7" value="5"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">8</td>
                        <td scope="col">CORELATION BETWEEN THEORY AND<BR> PRACTICAL APPLICATION <div id="validation_8"></div></td>
                        <td scope="col"><input type="radio" id="marginal_8" name="eiq"class="radio_8" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_8" name="eiq"class="radio_8" value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_8" name="eiq"class="radio_8" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_8" name="eiq"class="radio_8" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_8" name="eiq"class="radio_8" value="5"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">9</td>
                        <td scope="col">CLASS CONDUCTION AS PER TIME TABLE<div id="validation_9"></div></td>
                        <td scope="col"><input type="radio" id="marginal_9" name="niq"class="radio_9" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_9" name="niq"class="radio_9" value="2" onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_9" name="niq"class="radio_9" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_9" name="niq"class="radio_9" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_9" name="niq"class="radio_9" value="5"onclick="errorRemove()"></td>
                    </tr>
                    <tr>
                        <td scope="col">10</td>
                        <td scope="col">OVERALL FEEDBACK ON ATTITUDE AND <BR>INSPIRATION <div id="validation_10"></div></td>
                        <td scope="col"><input type="radio" id="marginal_10" name="teq"class="radio_10" value="1"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="satisfactory_10" name="teq"class="radio_10" value="2"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="good_10" name="teq"class="radio_10" value="3"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="very_good_10" name="teq"class="radio_10" value="4"onclick="errorRemove()"></td>
                        <td scope="col"><input type="radio" id="excellent_10" name="teq"class="radio_10" value="5"onclick="errorRemove()"></td>
                    </tr>
                </tbody>

            </table>
            <div class="form-row">
                <div class="form-group col-md-12 text-end">
                    <button type="submit" class="btn btn-danger"name="submit" onclick="validateAndCalculate()">Submit</button>
                </div>
                <div class="container mt-3 text-center">
                    <div id="average-alert" class="alert alert-success d-none" role="alert">
                        <h5 class="alert-heading">Average</h5>
                        <div id="average-value" class="border p-3 rounded"></div>
                    </div>
                    <div id="error-alert" class="alert alert-danger d-none" role="alert"></div>
                </div>


            </div>
        </div>
    </form>




    <script>


        function validateAndCalculate() {
            if (validateThisFrom(document.getElementById('feedbackForm'))) {
                calculateAverage();
            }
        }


        function validateThisFrom(thisForm) {
            let fields = ['FIELDNAME_1', 'FIELDNAME_2', 'FIELDNAME_3', 'FIELDNAME_4', 'FIELDNAME_5', 'FIELDNAME_6'];
            let errorMessages = [
                '<span style="color:red"> fill this </span>',
                '<span style="color:red"> fill this </span>',
                '<span style="color:red"> fill this </span>',
                '<span style="color:red"> fill this </span>',
                '<span style="color:red"> fill this </span>',
                '<span style="color:red"> fill this </span>'
            ];
            let error = false;


            for (let i = 0; i < fields.length; i++) {
                let field = thisForm[fields[i]];
                if (field.value === "") {
                    document.querySelector('.dderror_' + (i + 1)).innerHTML = errorMessages[i];
                    field.focus();
                    error = true;
                } else {
                    document.querySelector('.dderror_' + (i + 1)).innerHTML = "";
                }
            }

            return !error; // Return false if there's an error, true otherwise
        }



        function calculateAverage() {
            var total = 0;
            var count = 0;
            var error = false;
            let points = [];
            for (var i = 1; i <= 10; i++) {
                var selectedValue = document.querySelector('input[class="radio_' + i + '"]:checked');
                if (selectedValue) {
                    total += parseInt(selectedValue.value);
                    count++;
                    document.getElementById("validation_" + i).innerText = "";
                    points.push("\n" + i + "question : mark=" + selectedValue.value + "");
                } else {
                    error = true;
                    var errorMessage = "*Please select this field ";
                    document.getElementById("validation_" + i).innerText = errorMessage;
                    document.getElementById("validation_" + i).style.color = "red";
                }
            }
            //   Grade condition

            let ave = count > 0 ? total / count : 0;
            const average = ave.toFixed(1);
            var grade;

            if ((average >= 6) && (average <= 7.5)) {
                grade = "A+";
            }
            if ((average >= 4.5) && (average <= 5.85)) {
                grade = "A";

            }
            if ((average >= 3.75) && (average <= 4.35)) {
                grade = "B";

            }
            else {
                grade = "C";
            }

            // below output condition 

            if (!error) {

                document.getElementById("average-value").innerText = "\n" + "Average: " + average + "\n" + " Grade :" + grade + "\n" + "Points : " + points;

                document.getElementById("average-alert").classList.remove("d-none");
                document.getElementById("error-alert").classList.add("d-none");
            } else {
                document.getElementById("error-alert").innerText = "Please select ratings for all questions.";
                document.getElementById("error-alert").classList.remove("d-none");
                document.getElementById("average-alert").classList.add("d-none");
            }


        }

        // error remove functoin for dropdown

        function errorRemove() {

            for (let i = 1; i <= 10; i++) {
                let selectingans = document.querySelector('input[class="radio_' + i + '"]:checked');
                if (selectingans) {
                    document.getElementById("validation_" + i).textContent = " ";
                }
            }


        }


    </script>



</body>

</html>
