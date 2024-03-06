document.addEventListener("DOMContentLoaded", function(){
    
    // Get the logout button
    const logoutBtn = document.getElementById('logoutBtn');
    
    // Get the modal
    const modal = document.getElementById('confirmationModal');
    
    // Get the <span> element that closes the modal
    const closeBtn = document.getElementsByClassName('close')[0]; //Mikä o?
    
    // When the user clicks the logout button, display the modal
    logoutBtn.onclick = function() {
      modal.style.display = 'block'; 
    }
    
    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function() {
      modal.style.display = 'none'; //Mikä o?
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target === modal) { //Mikä o?
        modal.style.display = 'none';
      }
    }
    
    // Handle logout confirmation
    const confirmLogoutBtn = document.getElementById('confirmLogoutBtn');
    confirmLogoutBtn.onclick = function() {
      
      window.location.replace("network_logout.php");
    }
    });
    