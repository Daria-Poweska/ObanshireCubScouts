// Confirmation message

function confirmAction(event, message) {
      if (!confirm(message)) {
        event.preventDefault();
      }
    }

