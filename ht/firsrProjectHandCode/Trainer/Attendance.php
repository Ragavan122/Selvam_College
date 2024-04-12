<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header>

        <h1 class="text-center"> Selvam College Of Technology</h1>
        <br>
        <h3 class="text-center"> Attendance</h3>

    </header>
    <form action="" class="container pt-3">


        <!-- Class-->
        <div class="row">
            <div class="mb-3 col">
                <label for="clsname" class="form-label">Class</label>
                <input type="text" class="form-control" id="clsname" value="IV MECH" readonly>
            </div>

            <!-- Subject-->
            <div class="mb-3 col">
                <label for="subn" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subn" value="web developement" readonly>
            </div>
        </div>


        <!-- Acadamic year-->
        <div class="row">
            <div class="mb-3 col">
                <label for="acdyear" class="form-label">Acadamic Year</label>
                <input type="text" class="form-control" id="acdyear" value="2023-2024" readonly>
            </div>


            <!-- sem-->
            <div class="mb-3 col">
                <label for="semn" class="form-label">SEM</label>
                <input type="text" class="form-control" id="semn" value="VII" readonly>
            </div>


        </div>



        <div class="container">

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Register Number</th>
                        <th scope="col">Name of the Student</th>
                        <th scope="col">Day-1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>mech123</td>
                        <td>Ajith kumar</td>
                        <td>
                            <input class="form-check-input  present" type="radio" name="ststatus" id="present">
                            <label class="form-check-label " for="present"> Present</label><br>
                            <input class="form-check-input absent" type="radio" name="ststatus" id="absent">
                            <label class="form-check-label" for="present">Absent</label>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>mech124</td>
                        <td>Vijaya kumar</td>
                        <td>
                            <input class="form-check-input  present" type="radio" name="ststatus" id="present">
                            <label class="form-check-label " for="present"> Present</label><br>
                            <input class="form-check-input absent" type="radio" name="ststatus" id="absent">
                            <label class="form-check-label" for="present">Absent</label>

                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>mech125</td>
                        <td>Suriya kumar</td>
                        <td>
                            <input class="form-check-input  present" type="radio" name="ststatus" id="present">
                            <label class="form-check-label " for="present"> Present</label><br>
                            <input class="form-check-input absent" type="radio" name="ststatus" id="absent">
                            <label class="form-check-label" for="present">Absent</label>

                        </td>
                    </tr>
                </tbody>
            </table>

        </div>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success me-md-2" type="button">submit</button>
            <button class="btn btn-danger" type="button">Reset</button>
        </div>




    </form>

</body>

</html>