const form = document.getElementById("form");
var index_soal = -1;
var total_number = 0;

function addNewForm() {
  total_number++;
  index_soal++;
  const divCard = document.createElement("div");
  divCard.setAttribute("class", "card p-2 mt-3");
  form.appendChild(divCard);

  const buttonDel = document.createElement("button");
  buttonDel.setAttribute("type", "button");
  buttonDel.setAttribute("class", "btn btn-inverse-danger btn-icon");
  buttonDel.innerHTML = "-";
  divCard.appendChild(buttonDel);


  buttonDel.addEventListener("click", function () {
    divCard.remove();
  });

  const divRow = document.createElement("div");
  divRow.setAttribute("class", "row");
  divCard.appendChild(divRow);

  const divInput = document.createElement("div");
  divInput.setAttribute("class", "col-sm-8 mt-3");
  divRow.appendChild(divInput);

  const inputLabel = document.createElement("input");
  inputLabel.setAttribute("class", "form-control mb-3");
  inputLabel.setAttribute("type", "text");
  inputLabel.setAttribute("name", "Soal[]");
  inputLabel.setAttribute("placeholder", "Ketikkan Soal");
  divInput.appendChild(inputLabel);

  const divRealInput = document.createElement("div");

  const input = document.createElement("input");
  input.setAttribute("type", "text");
  input.setAttribute("class", "form-control");
  divInput.appendChild(divRealInput);
  divRealInput.appendChild(input);

  const divType = document.createElement("div");
  divType.setAttribute("class", "col-sm-4 mt-3");
  divRow.appendChild(divType);

  const inputType = document.createElement("select");
  inputType.setAttribute("class", "form-control");
  inputType.setAttribute("name", "tipe_soal[]");
  const options = ["Text", "Checkbox", "Radio","Textarea"];

  options.map((option) => {
    const opt = document.createElement("option");
    opt.setAttribute("value", option);
  
    opt.innerHTML = option;
    inputType.appendChild(opt);

    return "";
  });

  inputType.addEventListener("change", function (e) {
    changeInput(e.target.value, divRealInput);
  });

  divType.appendChild(inputType);
}

const add = document.getElementById("add");

add.addEventListener("click", function () {
  addNewForm();
});

function removeChildEl(el) {
  while (el.hasChildNodes()) {
    el.removeChild(el.firstChild);
  }
}

function createText() {
  const input = document.createElement("input");
  input.setAttribute("class", "form-control mb-3");
  input.setAttribute("type", "input");
  input.setAttribute("name", "jawaban[]");
  return input;
}
function createTextArea() {
  const input = document.createElement("textarea");
  input.setAttribute("class", "form-control mb-3");
  
 return input;
}



function createCheckbox() {
  
  let inputGroup = document.createElement("div");
  inputGroup.setAttribute("class", "input-group mb-2");

  let inputGroupPrepend = document.createElement("div");
  inputGroupPrepend.setAttribute("class", "input-group-prepend");
  inputGroup.appendChild(inputGroupPrepend);

  let inputGroupText = document.createElement("div");
  inputGroupText.setAttribute("class", "input-group-text");
  inputGroupPrepend.appendChild(inputGroupText);

  const input = document.createElement("input");
  input.setAttribute("type", "checkbox");
  input.setAttribute("aria-label", "Checkbox button for following text input");
  inputGroupText.appendChild(input);

  let labelInput = document.createElement("input");
  labelInput.setAttribute("class", "form-control");
  labelInput.setAttribute("placeholder", "Pilihan Jawaban");
  labelInput.setAttribute("name", "pil_option-"+index_soal+"[]");

  inputGroupPrepend.appendChild(labelInput);

  return inputGroup;
}

function createRadio() {
  let inputGroup = document.createElement("div");
  inputGroup.setAttribute("class", "input-group mb-2");

  let inputGroupPrepend = document.createElement("div");
  inputGroupPrepend.setAttribute("class", "input-group-prepend");
  inputGroup.appendChild(inputGroupPrepend);

  let inputGroupText = document.createElement("div");
  inputGroupText.setAttribute("class", "input-group-text");
  inputGroupPrepend.appendChild(inputGroupText);

  const input = document.createElement("input");
  input.setAttribute("type", "radio");
  input.setAttribute("aria-label", "Radio button for following text input");
  inputGroupText.appendChild(input);

  let labelInput = document.createElement("input");
  labelInput.setAttribute("class", "form-control");
  labelInput.setAttribute("placeholder", "Pilihan Jawaban");
  labelInput.setAttribute("name", "pil_option-"+index_soal+"[]"); 
  inputGroupPrepend.appendChild(labelInput);

  return inputGroup;
}

function createButtonAddMin(targetEl, type) {
  const divButton = document.createElement("div");

  let buttonAdd = document.createElement("button");
  buttonAdd.innerHTML = "Add";
  buttonAdd.setAttribute("class", "btn btn-sm btn-outline-dark mt-2 mr-2");
  buttonAdd.setAttribute("type", "button");
  divButton.appendChild(buttonAdd);

  let buttonMin = document.createElement("button");
  buttonMin.innerHTML = "Delete";
  buttonMin.setAttribute("class", "btn btn-sm btn-outline-danger mt-2");
  buttonMin.setAttribute("type", "button");
  divButton.appendChild(buttonMin);

  let func = function () {};

  switch (type) {
    case "radio":
      func = createRadio();
      break;
    case "checkbox":
      func = createCheckbox();
      break;
    case "textarea":
      func = createTextArea();
      break;
    default:
      func = createCheckbox();
  }

  buttonAdd.addEventListener("click", function () {
    if (type === "checkbox") {
      targetEl.insertBefore(
        createCheckbox(),
        targetEl.childNodes[targetEl.childNodes.length - 1]
      );
    } else if (type === "radio") {
      targetEl.insertBefore(
        createRadio(),
        targetEl.childNodes[targetEl.childNodes.length - 1]
      );
    } else if (type === "textarea") {
      targetEl.insertBefore(
        createTextArea(),
        targetEl.childNodes[targetEl.childNodes.length - 1]
      );
    }
  });

  buttonMin.addEventListener("click", function () {
    targetEl.removeChild(targetEl.firstChild);
  });

  return divButton;
}

function changeInput(type, targetEl) {
  removeChildEl(targetEl);
  switch (type) {
    case "Text":
      targetEl.appendChild(createText());
      break;
    case "Radio":
      targetEl.appendChild(createRadio());
      targetEl.appendChild(createButtonAddMin(targetEl, "radio"));
      break;
    case "Checkbox":
      targetEl.appendChild(createCheckbox());
      targetEl.appendChild(createButtonAddMin(targetEl, "checkbox"));
      break;
    case "Textarea":
      targetEl.appendChild(createTextArea());
      break;
    default:
  }
}
