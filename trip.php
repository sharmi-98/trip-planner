<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Planner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Trip Planner</h1>
            <p>Plan your next adventure!</p>
        </header>

        <form action="index.php" method="post">
            <div class="form-section">
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" placeholder="Enter destination" required>
            </div>

            <div class="form-section">
                <label for="start-date">Start Date:</label>
                <input type="date" id="start-date" name="start-date" required>
            </div>

            <div class="form-section">
                <label for="end-date">End Date:</label>
                <input type="date" id="end-date" name="end-date" required>
            </div>

            <div class="form-section">
                <label for="transportation">Transportation:</label>
                <select id="transportation" name="transportation">
                    <option value="plane">Plane</option>
                    <option value="train">Train</option>
                    <option value="car">Car</option>
                    <option value="bus">Bus</option>
                </select>
            </div>

            <div class="form-section">
                <label for="accommodation">Accommodation (Hotel, Airbnb, etc.):</label>
                <input type="text" id="accommodation" name="accommodation" placeholder="Enter accommodation details">
            </div>

            <div class="form-section">
                <label for="activities">Activities (separate by commas):</label>
                <textarea id="activities" name="activities" rows="4" placeholder="E.g., Sightseeing, Hiking, Beach"></textarea>
            </div>

            <div class="form-section">
                <label for="budget">Estimated Budget ($):</label>
                <input type="number" id="budget" name="budget" placeholder="Enter estimated budget" required>
            </div>

            <div class="form-section">
                <label for="emergency-contact">Emergency Contact Name:</label>
                <input type="text" id="emergency-contact" name="emergency-contact" placeholder="Enter emergency contact name" required>
            </div>

            <div class="form-section">
                <label for="emergency-phone">Emergency Contact Phone:</label>
                <input type="tel" id="emergency-phone" name="emergency-phone" placeholder="Enter emergency contact phone" required>
            </div>

            <a href="final.php">Save Trip</a>
        </form>

        <footer>
            <p>&copy; 2024 Trip Planner. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
