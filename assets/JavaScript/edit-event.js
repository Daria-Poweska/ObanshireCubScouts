// Edit Event JS

function editEvent(eventId, title, date, location, description, activities, image) {
    document.getElementById('editEventId').value = eventId;
    document.getElementById('editTitle').value = title;
    document.getElementById('editDate').value = date;
    document.getElementById('editLocation').value = location;
    document.getElementById('editDescription').value = description;
    document.getElementById('editActivities').value = activities;
    // Showing the modal
    new bootstrap.Modal(document.getElementById('editEventModal')).show();
  }