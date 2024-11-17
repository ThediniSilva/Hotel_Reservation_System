document.addEventListener('click', function(event) {
  if (event.target.classList.contains('faq-question')) {
    const answer = event.target.nextElementSibling;
    answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
  }
});

const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById('search-input');
const faqQuestions = document.querySelectorAll('.faq-question');

searchButton.addEventListener('click', function() {
  const searchTerm = searchInput.value.toLowerCase();

  faqQuestions.forEach(function(question) {
    const questionText = question.textContent.toLowerCase();
	  console.log('question-' ,questionText);

    if (questionText.includes(searchTerm)) {
      question.style.display = 'block';
    } else {
      question.style.display = 'none';
    }
  });
});