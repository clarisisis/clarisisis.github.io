<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Bieber Fanpage</title>
    <style>
        body {
            background-color: #FF69B4; /* Hot Pink */
            font-family: 'Comic Sans MS', cursive, sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 4em;
            margin-top: 20px;
            text-shadow: 3px 3px 5px #FF1493;
        }

        p {
            font-size: 1.5em;
            margin: 20px;
            text-shadow: 2px 2px 4px #FF1493;
        }

        .form-container {
            background-color: #FFC0CB; /* Light Pink */
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 2px #FF1493;
        }

        .form-container h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .form-container label {
            display: block;
            margin: 10px 0;
            font-size: 1.2em;
        }

        .form-container input[type="checkbox"] {
            margin-right: 10px;
        }

        .form-container button {
            background-color: #FF1493;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #FF69B4;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }

        .gallery img {
            margin: 10px;
            border: 5px solid #FF1493;
            border-radius: 10px;
            max-width: 30%;
            transition: transform 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.1);
            box-shadow: 0px 0px 20px 5px #FF1493;
        }

        .characters {
            display: flex;
            justify-content: space-around;
            margin: 40px 0;
        }

        .characters img {
            width: 150px;
            transition: transform 0.3s;
        }

        .characters img:hover {
            transform: scale(1.1);
        }

        footer {
            background-color: #FF1493;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }
    </style>
    <script>
        function validateForm(event) {
            // Get all checkboxes
            const checkboxes = document.querySelectorAll('input[name="singer[]"]:checked');
            let justinSelected = false;

            // Check if Justin Bieber is selected
            checkboxes.forEach((checkbox) => {
                if (checkbox.value === "Justin Bieber") {
                    justinSelected = true;
                }
            });

            // If Justin is selected, redirect to award page
            if (justinSelected) {
                window.location.href = "award.html";
                event.preventDefault(); // Prevent form submission
            } else {
                alert("SIKE! You gotta pick Justin Bieber!");
                event.preventDefault(); // Prevent form from submitting
            }
        }
    </script>
</head>
<body>
    <h1>Justin Bieber Fanpage</h1>

    <div class="form-container">
        <h2>Which other singers do you like?</h2>
        <form onsubmit="validateForm(event)" method="post">
            <label>
                <input type="checkbox" name="singer[]" value="Justin Bieber"> Justin Bieber
            </label>
            <label>
                <input type="checkbox" name="singer[]" value="Ariana Grande"> Ariana Grande
            </label>
            <label>
                <input type="checkbox" name="singer[]" value="Selena Gomez"> Selena Gomez
            </label>
            <label>
                <input type="checkbox" name="singer[]" value="Taylor Swift"> Taylor Swift
            </label>
            <label>
                <input type="checkbox" name="singer[]" value="Shawn Mendes"> Shawn Mendes
            </label>
            <label>
                <input type="checkbox" name="singer[]" value="Ed Sheeran"> Ed Sheeran
            </label>
            <label>
                <input type="checkbox" name="singer[]" value="Billie Eilish"> Billie Eilish
            </label>
            <button type="submit">Submit</button>
        </form>
    </div>

    <p>The best place for all things Justin! SLAY!</p>

    <div class="gallery">
        <a href="justin1.html"><img src="justin1 (1).jpg" alt="Justin Bieber 1"></a>
        <a href="justin2.html"><img src="justin2 (1).jpg" alt="Justin Bieber 2"></a>
        <a href="justin3.html"><img src="justin3 (1).jpg" alt="Justin Bieber 3"></a>
        <a href="justin4.html"><img src="justin4 (1).jpg" alt="Justin Bieber 4"></a>
        <a href="justin5.html"><img src="justin5 (1).jpg" alt="Justin Bieber 5"></a>
        <a href="justin6.html"><img src="justin6 (1).jpg" alt="Justin Bieber 6"></a>
    </div>

    <div class="characters">
        <img src="snoopy.png" alt="Snoopy" title="Snoopy loves JB!">
        <img src="shaun.png" alt="Shaun the Sheep" title="Shaun the Sheep is a Belieber too!">
    </div>

    <footer>
        <p>Made with ❤️ by Beliebers + Snoopy & Shaun the Sheep</p>
    </footer>
</body>
</html>
