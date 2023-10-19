function toggleMenu() {
  var menu = document.getElementById("menu");
  menu.classList.toggle("active");
}

(function () {
  // https://dashboard.emailjs.com/admin/account
  emailjs.init("IMM35fjRta0tqtoc0");
})();

void function () {
  document
    .getElementById("contact-form")
    .addEventListener("submit", function (event) {
      event.preventDefault();
      // generate a five digit number for the contact_number variable
      this.contact_number.value = (Math.random() * 100000) | 0;
      // these IDs from the previous steps
      emailjs.sendForm("service_a6439uj", "contact_form", this).then(
        function () {
          // console.log("SUCCESS!");
          alert("Messaggio inviato correttamente :)");
        },
        function (error) {
          // console.log("FAILED...", error);
          alert("Errore :( Riprova o utilizza un altro canale.)");
        }
      );
    });
};
