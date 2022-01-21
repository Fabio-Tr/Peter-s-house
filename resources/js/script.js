
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
  }
  
  let callback = (entries) => {
    entries.forEach(entry => {
  
      if (entry.isIntersecting) {
        entry.target.classList.add('card-visible');
      } else {
        entry.target.classList.remove('card-visible');
      }
  
    });
  }
  
  let observer = new IntersectionObserver(callback, options);
  
  document.querySelectorAll('.card-invsible')
    .forEach(box => { observer.observe(box) });





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



