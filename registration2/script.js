document.getElementById('registrationForm').addEventListener('submit', function(event) {
     var form = this;
     var valid = true;
 
     // Check if all required fields are filled
     ['fname', 'lname', 'email', 'password'].forEach(function(id) {
         var input = document.getElementById(id);
         if (!input.value.trim()) {
             alert('Please fill in your ' + input.placeholder);
             valid = false;
             input.focus();
             event.preventDefault(); // Prevent form submission
             return false;
         }
     });
 
     // Password length validation
     var password = document.getElementById('password');
     if (password.value.length < 6) {
         alert('Password must be at least 6 characters long.');
         valid = false;
         password.focus();
         event.preventDefault(); // Prevent form submission
         return false;
     }
 
     // Check if gender is selected
     if (!form.gender.value) {
         alert('Please select a gender.');
         valid = false;
         event.preventDefault(); // Prevent form submission
         return false;
     }
 
     return valid;
 });
 