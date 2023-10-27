// const itemGroup = document.getElementById("list-group");
// let prevItem = null;
// const itemPressed = (e) => {
//     if (e.target.getAttribute('data-my-toggle') === 'list') {
//         e.target.classList.add('active');
//         if (prevItem !== null) {
//             prevItem.classList.remove('active');
//         }
//         prevItem = e.target;
//     }
// }
// itemGroup.addEventListener("click", itemPressed);

const itemGroup = document.getElementById("list-group");
let selected = null;
const itemPress = (e) => {
    if (e.target.getAttribute('data-my-toggle') === 'list') {
        e.target.classList.add('active');
        if (selected !== null) {
            selected.classList.remove('active');
        }
        selected = e.target;
    }
}
itemGroup.addEventListener("click", itemPress);



