<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Typing Game</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <input type="text" class="input-field">
        <div class="content-box">
            <div class="typing-text">
                <p id="paragraph"></p>
            </div>
            <div class="content">
                <ul class="result-details">
                    <li class="time">
                        <p>
                            Time Left:
                        </p>
                        <span><b>60</b>s</span>
                    </li>
                    <li class="mistake">
                        <p>
                            Mistakes:
                        </p>
                        <span>0</span>
                    </li>
                    <li class="wpm">
                        <p>
                            WPM:
                        </p>
                        <span>0</span>
                    </li>
                    <li class="cpm">
                        <p>
                            CPM:
                        </p>
                        <span>0</span>
                    </li>
                </ul>
            </div>
        </div>
        <button>Try Again</button>
    </div>
</body>
</html>