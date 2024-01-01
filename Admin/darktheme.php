<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">

    <style>
        /* Styles for the toggle switch */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            background-color: #ccc;
            border-radius: 34px;
            border: none;
            cursor: pointer;
        }

        .toggle-switch::before {
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background-color: white;
            top: 4px;
            left: 4px;
            transition: all 0.3s;
        }

        /* Toggle the switch */
        .toggle-switch.active::before {
            transform: translateX(26px);
        }

        /* Text label for the toggle switch */
        .toggle-switch::after {
            content: "OFF";
            display: block;
            position: absolute;
            top: 7px;
            right: 10px;
            color: white;
            font-size: 14px;
        }

        /* Text label for the toggle switch when it is active */
        .toggle-switch.active::after {
            content: "ON";
            left: 10px;
            right: auto;
        }

        .toggle-switch.active {
            background-color: #4CAF50;
        }
    </style>
    <button class="toggle-switch" id="btnSwitch" onclick="toggleSwitch()">
        <span class=" spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        <span class="visually-hidden">Loading...</span>
    </button>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        document.getElementById('btnSwitch').addEventListener('click', () => {
            if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
                document.documentElement.setAttribute('data-bs-theme', 'light')
            } else {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            }
        })
    </script>
    <script>
        function toggleSwitch() {
            var switchButton = document.querySelector(".toggle-switch");
            switchButton.classList.toggle("active");
        }
    </script>
</body>

</html>