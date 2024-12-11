// assets/js/donation.js
document.getElementById('donationForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const formData = new FormData(this);
  const data = {
      type: formData.get('type'),
      amount: parseFloat(formData.get('amount')),
      message: formData.get('message')
  };
  
  fetch('/api/donations/create.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(result => {
      if(result.success) {
          alert('Thank you for your donation!');
          window.location.href = 'index.php';
      } else {
          alert('There was an error processing your donation.');
      }
  })
  .catch(error => {
      console.error('Error:', error);
      alert('There was an error processing your donation.');
  });
});