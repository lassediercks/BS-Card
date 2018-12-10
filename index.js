let name = 'Max Mustermann';

class Card extends HTMLElement {
  constructor() {
    super();

    var innerContent = this.innerHTML;
    this.innerHTML = '';
    this.className = 'card';

    var cardNameDiv = document.createElement('div');
    cardNameDiv.className = 'card-name';
    cardNameDiv.innerHTML = name;
    this.appendChild(cardNameDiv);

    var cardContent = document.createElement('p');
    cardContent.innerHTML = innerContent;
    cardContent.className = 'text';
    this.appendChild(cardContent);
  }
}

customElements.define('b-card', Card);
