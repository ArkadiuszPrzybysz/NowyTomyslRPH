let text = document.getElementById('text1');

window.addEventListener('scroll', function(){
  let value = window.scrollY;
  text.style.marginTop = value * 1.20 + 'px';
})