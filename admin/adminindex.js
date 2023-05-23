function confirmUpdate(name) {
    var confirmed = confirm('Are you sure you want to update ' + name +  '\'s profile?');
    if (!confirmed) {
      return false;
    }
  }


function confirmDelete() {
    var confirmed = confirm('Are you sure you want to delete this profile?');
    if (!confirmed) {
      return false;
    }
  }