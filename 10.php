<!DOCTYPE html>
<html>
<head>

    <title>Event Registration Form</title>

    <style>

        body{
            font-family: Arial;
            background:#f2f2f2;
        }

        .container{
            width:450px;
            margin:auto;
            margin-top:40px;
            background:white;
            padding:25px;
            border-radius:10px;
        }

        h2{
            text-align:center;
            color:darkblue;
        }

        input,select{
            width:100%;
            padding:10px;
            margin-top:8px;
            margin-bottom:15px;
        }

        button{
            width:100%;
            padding:10px;
            background:darkblue;
            color:white;
            border:none;
            font-size:16px;
        }

        table{
            width:100%;
            margin-top:20px;
            border-collapse:collapse;
        }

        table,th,td{
            border:1px solid black;
        }

        th,td{
            padding:10px;
            text-align:center;
        }

    </style>

    <script>

        function validateForm()
        {
            var name=document.getElementById("name").value;

            var email=document.getElementById("email").value;

            var mobile=document.getElementById("mobile").value;

            var event=document.getElementById("event").value;

            if(name=="" || email=="" || mobile=="" || event=="")
            {
                alert("Please fill all fields");
                return false;
            }

            if(mobile.length!=10)
            {
                alert("Enter valid mobile number");
                return false;
            }

            alert("Event Registration Successful");

            return true;
        }

    </script>

</head>

<body>

    <div class="container">

        <h2>Event Registration Form</h2>

        <form method="post" onsubmit="return validateForm()">

            <label>Name</label>

            <input type="text" id="name" name="name" placeholder="Enter Name">

            <label>Email</label>

            <input type="email" id="email" name="email" placeholder="Enter Email">

            <label>Mobile Number</label>

            <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile Number">

            <label>Select Event</label>

            <select id="event" name="event">

                <option value="">Select Event</option>

                <option>Technical Seminar</option>

                <option>Coding Competition</option>

                <option>Workshop</option>

                <option>Sports Event</option>

            </select>

            <button type="submit" name="submit">
                Register
            </button>

        </form>

        <?php

        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];

            $email=$_POST['email'];

            $mobile=$_POST['mobile'];

            $event=$_POST['event'];

            echo "

            <table>

                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>

                <tr>
                    <td>Name</td>
                    <td>$name</td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>$email</td>
                </tr>

                <tr>
                    <td>Mobile</td>
                    <td>$mobile</td>
                </tr>

                <tr>
                    <td>Event</td>
                    <td>$event</td>
                </tr>

            </table>

            ";
        }

        ?>

    </div>

</body>
</html>
