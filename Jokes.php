<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Jokes</title>
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        body {
            background-color: #ddd1ca;


        }

        h1 {
            border: 2px solid black;
            background-color: #0867af;
            border-radius: 8px;
            color: white;
            margin: auto;
            width: 150px;
            text-align: center;

        }

        #jokes {
            font-size: 25px;
            margin: 2px;
            height: 40%;
            align-content: center;
            text-align: center;
            box-sizing: borderbox;
        }

        #btn {
            display: flex;
            background-color: white;
            color: blue;
            margin: auto;
            text-align: centre;
        }

        #btn:hover {
            background-color: #0867af;
            color: white;
            cursor: pointer;

        }

        @media (max-width: 500px) {

            #jokes {
                font-size: 20px;
                height: 45%;
            }
        }
    </style>
</head>

<body>
    <h1>Jokes</h1>
    <div id="jokes">
        <br>
        <strong>Cool Selfie</strong><br>

        I am so cool, my selfie is called a Kulfi!
    </div>
    <br><br><button onclick="nextJokes()" id="btn">Next Jokes</button>

    <script>
        let arr = [`<strong>Cool Selfie</strong><br>
    I am so cool, my selfie is called a Kulfi!`,

            `<strong>Totally Wrong</strong><br>
Boy: I am in love with you, totally… <br>
Girl: Tu Totla! Tela Baap Totla!`,

            `<strong>Shortest Murder Story</strong><br>
Shortest Murder Story: Wife: Sunte Ho… Husband: Nahi!`,

            `<strong>PHD</strong><br>
Teacher : नाड़े ko english में kya kehte hai…??? <br>
Santa : P.H.D. <br>Teacher : Kya….???<br> Santa : Pyjaama Holding Device..`,

            `<strong>Santa ka rona</strong><br>
Santa sharab pite pite rone laga… Banta : Kya hua ro Q rahe ho? <br>
Santa : Yaar jis ladki ko bhulane ke liye <br> pee raha tha uska naam yaad nahi aa raha...`,

            `<strong>Santa ka interview</strong><br>
Santa ka interview: Batao wo kaun si Aurat hain jisko 1OO% <br>
pata hota hain ki uska Husband kaha hain? <br>
Santa ne apna khatarnak dimag lagaya aur bola “Vidhwa Aurat”`,

            `<strong>Same as above</strong><br>
Santa Ne Ghar Ke Uper Wale Hisse Mein Paint Kiya <br>
Aur Neeche Wale Hisse Mein Likh Diya . . . . 'Same As Above'`
        ];


        let i = Math.floor(Math.random() * arr.length);

        function nextJokes() {

            document.getElementById("jokes").innerHTML = `<br> ${arr[i]}`;
            i++;

            if (i == arr.length) {
                i = 0;
            }

        }
    </script>
</body>

</html>