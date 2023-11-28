// Declaration Des Variable

console.log("first-test");

const addNewBank = document.getElementById("addBank");
const overlayAdd = document.getElementById("overlayAdd");
const overlayEdit = document.getElementById("overlayEdit");
const Add = document.getElementById("Add");
const Edit = document.getElementById("Edit");

addNewBank.addEventListener("click", () => {
  overlayAdd.classList.toggle("hidden");
  Add.classList.toggle("hidden");
});
overlayAdd.addEventListener("click", () => {
  overlayAdd.classList.toggle("hidden");
  Add.classList.toggle("hidden");
});
function updateForm() {
  overlayEdit.classList.toggle("hidden");
  Edit.classList.toggle("hidden");
}
