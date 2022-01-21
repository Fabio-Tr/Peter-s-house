var cardV = 'card-visible'
var cardI = '.card-invsible'
var textV = 'text-visible'
var textI = '.text-invisible'

function myFunction (a,b) {
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.3
  }
  
  let callback = (entries) => {
    entries.forEach(entry => {
  
      if (entry.isIntersecting) {
        entry.target.classList.add(a);
      } else {
        entry.target.classList.remove(a);
      }
  
    });
  }
  
  let observer = new IntersectionObserver(callback, options);
  
  document.querySelectorAll(b)
    .forEach(box => { observer.observe(box) });

}

myFunction(cardV, cardI);
myFunction(textV, textI);



document.getElementById('letojanni-arrow').onclick = function () {
  var x = document.getElementById("letojanni");
  var y = document.getElementById("calatabiano");
  x.style.display = "block";
  y.style.display = "none";

}

document.getElementById('calatabiano-arrow').onclick = function () {
  var x = document.getElementById("calatabiano");
  var y = document.getElementById("letojanni");
  x.style.display = "block";
  y.style.display = "none";

}



