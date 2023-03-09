<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="form-container">
<h1>Basic Fit Utrecht</h1>
        <form action="submit-form.php" method="post">
            <label for="homeclub">Kies je homeclub:<br></label>
            <select name="homeclub" id="homeclub" required>
                <option value="">--Select an option--</option>
                <option value="club1">Club 1</option>
                <option value="club2">Club 2</option>
                <option value="club3">Club 3</option>
            </select>
<br><br>
            <label>Selecteer een lıdmaatschap:</label>
            <div class="radio-group">
                <input type="radio" name="membership" value="comfort" required>Comfort
                <input type="radio" name="membership" value="premium" required>Premium
                <input type="radio" name="membership" value="allIn" required>All in
            </div>

            <label>Looptijd:</label>
            <div class="radio-group">
                <input type="radio" name="looptijd" value="jaar" required>Jaarlidmaatschap
                <input type="radio" name="looptijd" value="flex" required>Flex Optie
            </div>

            <label>Select je extras:</label>
            <div>
                <input type="checkbox" name="extra1" value="extra1"><label for="extra1">Yanga sportswater $2,50 per 4 weken</label>
                <br>
                <input type="checkbox" name="extra2" value="extra2"><label for="extra2">Personal online coach $60,00 eenmalig</label>
                <br>
                <input type="checkbox" name="extra3" value="extra3"><label for="extra3">Personal training intro $25,00 eenmalig</label>
            </div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required> <br>

            <div class="button-container">
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</div>
        </form>
    </div>
</body>
</html>
