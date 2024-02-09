const target = document.getElementById('typewriter');
  const text = 'Somos Yerba Tech';
  let index = 0;

  function typeWriter() {
    if (index < text.length) {
      target.textContent += text.charAt(index);
      index++;
      setTimeout(typeWriter, 100); // Adjust the speed of typing here
    }
  }

  // Start the typewriter effect when the DOM is fully loaded
  document.addEventListener('DOMContentLoaded', typeWriter);