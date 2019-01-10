let name = 'Max Mustermann';

class Card extends HTMLElement {
  constructor() {
    super();

    var innerContent = this.innerHTML;
    this.innerHTML = '';
    this.className = 'card';

    var cardInner = document.createElement('div');
    cardInner.className = 'card-inner';
    this.appendChild(cardInner);

    var cardNameDiv = document.createElement('div');
    cardNameDiv.className = 'card-name';
    cardNameDiv.innerHTML = name;
    cardInner.appendChild(cardNameDiv);

    var cardContent = document.createElement('p');
    cardContent.className = 'card-text';
    cardContent.innerHTML = innerContent;
    cardInner.appendChild(cardContent);
  }
}

customElements.define('b-card', Card);

let nameInput = document.querySelector('#nameInput');
let cardNames = document.querySelectorAll('.card-name');

nameInput.addEventListener('input', () => {
  console.log(nameInput.value);
  updateValue(nameInput.value);
});

function updateValue(val) {
  cardNames.forEach(el => {
    el.innerHTML = val;
  });
}

console.log(cardNames);
