<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Create New Event</h1>
        
        <!-- Display validation errors -->
        <div id="error-container" class="alert alert-danger" style="display: none;">
            <ul id="error-list"></ul>
        </div>

        <!-- Event creation form -->
        <form id="eventForm" action="/events/store" method="POST">
            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="start_date">Start Date & Time</label>
                <input type="datetime-local" class="form-control" id="start_date" name="start_date" required>
            </div>

            <div class="form-group">
                <label for="end_date">End Date & Time</label>
                <input type="datetime-local" class="form-control" id="end_date" name="end_date" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>

    <script>
        document.getElementById("eventForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            // Simple client-side validation
            let errors = [];
            const title = document.getElementById("title").value.trim();
            const startDate = document.getElementById("start_date").value;
            const endDate = document.getElementById("end_date").value;
            
            if (!title) {
                errors.push("Event title is required.");
            }
            if (new Date(startDate) > new Date(endDate)) {
                errors.push("End date must be after start date.");
            }

            if (errors.length > 0) {
                const errorContainer = document.getElementById("error-container");
                const errorList = document.getElementById("error-list");
                errorList.innerHTML = "";
                errors.forEach(error => {
                    const li = document.createElement("li");
                    li.textContent = error;
                    errorList.appendChild(li);
                });
                errorContainer.style.display = "block";
            } else {
                this.submit();
            }
        });
    </script>
</body>
</html>
