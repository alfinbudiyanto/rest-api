// const mahasiswa = {
//   nama: "Alfin Budiyanto",
//   nrp: "027936160",
//   email: "alfinbudiyanto@unpas.ac.id",
// };

// console.log(JSON.stringify(mahasiswa));

// const xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     const mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// };
// xhr.open("GET", "coba.json", true);
// xhr.send();

$.getJSON("coba.json", function (data) {
  console.log(data);
});