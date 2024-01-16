const search = (type) => {
  let searchbox;
  if (type === 'location') {
    searchbox = document.getElementById("searchBoxLocation").value.toUpperCase();
  } else if (type === 'price') {
    searchbox = document.getElementById("searchBoxPrice").value.toUpperCase();
  }
  
  const view = document.querySelectorAll(".page-item.card");

  view.forEach(item => {
    let match;
    if (type === 'location') {
      match = item.querySelector(".page-item-content");
    } else if (type === 'price') {
      match = item.querySelector(".price");
    }

    if (match) {
      let textvalue = match.textContent || match.innerText;
      if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    }
  });
}
